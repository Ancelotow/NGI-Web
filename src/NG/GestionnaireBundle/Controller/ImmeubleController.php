<?php

namespace NG\GestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NG\GestionnaireBundle\Entity\Copropriete;
use NG\GestionnaireBundle\Form\CoproprieteType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ImmeubleController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $copros = $em->getRepository("NGGestionnaireBundle:Copropriete")->allCopro();
        return $this->render('NGGestionnaireBundle:immeuble:index.html.twig', array("immeubles"=>$copros));
    }

    public function mapAction()
    {
        $em = $this->getDoctrine()->getManager();
        $copros = $em->getRepository("NGGestionnaireBundle:Copropriete")->allCopro();
        return $this->render('NGGestionnaireBundle:geolocalisation:carte.html.twig', array("immeubles"=>$copros));
    }

    public function addAction(Request $request){

        if(!$this->isGranted('ROLE_ADMIN', 'ROLE_GESTIONNAIRE')){
            throw $this->createAccessDeniedException();
        }

        $cop = new Copropriete();
        $form   = $this->createForm(CoproprieteType::class, $cop);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $resp = $this->verif($cop->getCode());
            if($resp == false){
                return $this->render('NGGestionnaireBundle:immeuble:add.html.twig', array(
                    'form' => $form->createView(), 'error' => true
                ));
            }
            $file = $cop->getImage();
            $filename = $this->generateUniqueFileName().'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('copro_directory'),
                $filename
            );
            $cop->setImage($filename);
            $em = $this->getDoctrine()->getManager();
            $em->persist($cop);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Copropriété bien enregistrer');

            return $this->redirect('/ng/gestion/immeuble');
        }

        return $this->render('NGGestionnaireBundle:immeuble:add.html.twig', array(
            'form' => $form->createView(), 'error'=> false
        ));
    }

    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }

    public function uneCoproAction($code)
    {
        $em = $this->getDoctrine()->getManager();
        $copro = $em->getRepository("NGGestionnaireBundle:Copropriete")->uneCopro($code);
        $em = $this->getDoctrine()->getManager();
        if($copro == null){
            return $this->render("NGAdministrateurBundle:Default:errorCopro.html.twig");
        }
        $lots = $em->getRepository("NGGestionnaireBundle:Lot")->lotCopro($copro->getId());
        $em = $this->getDoctrine()->getManager();
        $props = $em->getRepository("NGGestionnaireBundle:Lot")->propsLot($copro->getId());
        $em = $this->getDoctrine()->getManager();
        $habs = $em->getRepository("NGGestionnaireBundle:Habitant")->lesHabs($copro->getId());
        $em = $this->getDoctrine()->getManager();
        $ags = $em->getRepository("NGGestionnaireBundle:AG")->lesAgs($copro->getId());
        $em = $this->getDoctrine()->getManager();
        $cs = $em->getRepository("NGGestionnaireBundle:CS")->lesCS($copro->getId());
        $em = $this->getDoctrine()->getManager();
        $sin = $em->getRepository("NGGestionnaireBundle:Sinistre")->lesSin($copro->getId());
        return $this->render('NGGestionnaireBundle:immeuble:copro.html.twig', array(
            "copro"=>$copro,
            "lots"=>$lots,
            "props"=>$props,
            "habs"=>$habs,
            "ags"=>$ags,
            "cs"=>$cs,
            "sin"=>$sin,
        ));
    }

    public function verif($code)
    {
        $em = $this->getDoctrine()->getManager();
        $copro = $em->getRepository("NGGestionnaireBundle:Copropriete")->uneCopro($code);
        if($copro == null){
            return true;
        }
        else{
            return false;
        }
    }

    public function pdfAction($id){
        $em = $this->getDoctrine()->getManager();
        $copro = $em->getRepository("NGGestionnaireBundle:Copropriete")->findOneBy(array('id'=>$id));
        if($copro == null){
            return $this->render("NGAdministrateurBundle:Default:errorCopro.html.twig");
        }
        $lots = $em->getRepository("NGGestionnaireBundle:Lot")->lotCopro($copro->getId());
        $em = $this->getDoctrine()->getManager();
        $props = $em->getRepository("NGGestionnaireBundle:Lot")->propsLot($copro->getId());
        $em = $this->getDoctrine()->getManager();
        $habs = $em->getRepository("NGGestionnaireBundle:Habitant")->lesHabs($copro->getId());
        $em = $this->getDoctrine()->getManager();
        $ags = $em->getRepository("NGGestionnaireBundle:AG")->lesAgs($copro->getId());
        $em = $this->getDoctrine()->getManager();
        $cs = $em->getRepository("NGGestionnaireBundle:CS")->lesCS($copro->getId());
        $em = $this->getDoctrine()->getManager();
        $sin = $em->getRepository("NGGestionnaireBundle:Sinistre")->lesSin($copro->getId());
        $logo = $this->container->getParameter('kernel.root_dir').'/../web/image/logo.jpg';
        $pdf = new \FPDF();
        $pdf->AddPage();
        $pdf->setTitle($copro->getCode());
        $pdf->SetFont('Arial','B',16);
        $pdf->Image($logo, 10, 10, -300);
        $pdf->Line(10,50,200,50);
        $pdf->Text(150, 44, "Fiche Immeuble");
        $pdf->SetFont('Arial','B',20);
        $pdf->Text(100, 65,$copro->getCode());
        $pdf->SetFont('Arial','B',16);
        $pdf->setTextColor(174,31,35);
        $pdf->Text(10, 85, "Adresse : ");
        $pdf->setTextColor(0);
        $pdf->Text(40, 85, utf8_decode($copro->getAdresse().", ".$copro->getVille()->getCP()." ".$copro->getVille()->getNom()));
        $pdf->Text(90, 105, "Les Lots");
        $pdf->SetY(110);
        $pdf->SetX(10);
        $pdf->SetFont('Arial','B',12);
        $pdf->SetFillColor(174,31,35);
        $pdf->setTextColor(255,255,255);
        $pdf->Cell(30,6,iconv('UTF-8', 'ISO-8859-2',"Numéro"),1,0,'L',1);
        $pdf->Cell(30,6,iconv('UTF-8', 'ISO-8859-2',"Étage"),1,0,'L',1);
        $pdf->Cell(30,6,"Surface",1,0,'L',1);
        $pdf->Cell(30,6,"Carrez",1,0,'L',1);
        $pdf->Cell(30,6,"Prix",1,0,'L',1);
        $pdf->Cell(40,6,iconv('UTF-8', 'ISO-8859-2',"Propriétaire"),1,0,'L',1);
        $i = 116;
        foreach( $lots as $unL ){
            $pdf->SetTextColor(0);
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY(10,$i);
            $pdf->MultiCell(30,6,$unL->getNum(),1);
            $pdf->SetXY(40,$i);
            $pdf->MultiCell(30,6,$unL->getEtage(),1);
            $pdf->SetXY(70,$i);
            $pdf->MultiCell(30,6,utf8_decode($unL->getSurface()."m²"),1);
            $pdf->SetXY(100,$i);
            $pdf->MultiCell(30,6,utf8_decode($unL->getCarezze()."m²"),1);
            $pdf->SetXY(130,$i);
            $pdf->MultiCell(30,6,iconv("UTF-8", "CP1252",$unL->getPrix().'€'),1);
            $pdf->SetXY(160,$i);
            if($unL->getProprietaire()->getSexe() == 0){
                $pdf->MultiCell(40,6,iconv('UTF-8', 'ISO-8859-2',"Mme. ".$unL->getProprietaire()->getNom()),1);
            }else{
                $pdf->MultiCell(40,6,iconv('UTF-8', 'ISO-8859-2',"M. ".$unL->getProprietaire()->getNom()),1);
            }
            $i = $i + 6;
        }
        $pdf->SetFont('Arial','B',16);
        $pdf->SetTextColor(0);
        $pdf->Text(80, $i+14, iconv('UTF-8', 'ISO-8859-2',"Les propriétaires"));
        $pdf->SetY($i+19);
        $pdf->SetX(5);
        $pdf->SetFont('Arial','B',12);
        $pdf->SetFillColor(174,31,35);
        $pdf->setTextColor(255,255,255);
        $pdf->Cell(50,6,"Nom",1,0,'L',1);
        $pdf->Cell(50,6,iconv('UTF-8', 'ISO-8859-2',"Prénom"),1,0,'L',1);
        $pdf->Cell(50,6,iconv('UTF-8', 'ISO-8859-2',"Téléphone"),1,0,'L',1);
        $pdf->Cell(50,6,"Adresse mail",1,0,'L',1);
        $j = $i+25;
        foreach( $props as $unP ){
            $pdf->SetTextColor(0);
            $pdf->SetFont('Arial','',10);
            $pdf->SetXY(5,$j);
            if($unP->getProprietaire()->getSexe() == 0){
                $pdf->MultiCell(50,6,iconv('UTF-8', 'ISO-8859-2',"Mme. ".$unP->getProprietaire()->getNom()),1);
            }else{
                $pdf->MultiCell(50,6,iconv('UTF-8', 'ISO-8859-2',"M. ".$unP->getProprietaire()->getNom()),1);
            }
            $pdf->SetXY(55,$j);
            $pdf->MultiCell(50,6,iconv('UTF-8', 'ISO-8859-2',$unP->getProprietaire()->getPrenom()),1);
            $pdf->SetXY(105,$j);
            $pdf->MultiCell(50,6,$unP->getProprietaire()->getTel(),1);
            $pdf->SetXY(155,$j);
            $pdf->MultiCell(50,6,$unP->getProprietaire()->getEmail(),1);
            $j = $j + 6;
        }
        $pdf->SetFont('Arial','B',16);
        $pdf->SetTextColor(0);
        $pdf->Text(87, $j+14, "Les Habitants");
        $pdf->SetY($j+19);
        $pdf->SetX(5);
        $pdf->SetFont('Arial','B',12);
        $pdf->SetFillColor(174,31,35);
        $pdf->setTextColor(255,255,255);
        $pdf->Cell(40,6,"Nom",1,0,'L',1);
        $pdf->Cell(40,6,iconv('UTF-8', 'ISO-8859-2',"Prénom"),1,0,'L',1);
        $pdf->Cell(40,6,iconv('UTF-8', 'ISO-8859-2',"Téléphone"),1,0,'L',1);
        $pdf->Cell(40,6,"Adresse mail",1,0,'L',1);
        $pdf->Cell(40,6,"Lot",1,0,'L',1);
        $k = $j+25;
        foreach( $habs as $unH ){
            $pdf->SetTextColor(0);
            $pdf->SetFont('Arial','',10);
            $pdf->SetXY(5,$k);
            if($unH->getSexe() == 0){
                $pdf->MultiCell(40,6,iconv('UTF-8', 'ISO-8859-2',"Mme. ".$unH->getNom()),1);
            }else{
                $pdf->MultiCell(40,6,iconv('UTF-8', 'ISO-8859-2',"M. ".$unH->getNom()),1);
            }
            $pdf->SetXY(45,$k);
            $pdf->MultiCell(40,6,iconv('UTF-8', 'ISO-8859-2',"Mme. ".$unH->getPrenom()),1);
            $pdf->SetXY(85,$k);
            $pdf->MultiCell(40,6,$unH->getTel(),1);
            $pdf->SetXY(125,$k);
            $pdf->MultiCell(40,6,$unH->getEmail(),1);
            $pdf->SetXY(165,$k);
            $pdf->MultiCell(40,6,$unH->getLot()->getNum(),1);
            $k = $k + 6;
        }
        return new Response($pdf->Output("Copropriete_".$copro->getCode().".pdf",'I'));
    }

}