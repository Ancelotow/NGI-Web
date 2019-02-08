<?php

namespace NG\GestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NG\GestionnaireBundle\Entity\Proprietaire;
use NG\GestionnaireBundle\Form\ProprietaireType;
use NG\GestionnaireBundle\Entity\Lot;
use NG\AdministrateurBundle\Entity\TypeLot;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProprietaireController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $props = $em->getRepository("NGGestionnaireBundle:Proprietaire")->allProp();
        return $this->render('NGGestionnaireBundle:proprietaire:index.html.twig', array("props"=>$props));
    }

    public function addAction(Request $request){

        if(!$this->isGranted('ROLE_ADMIN', 'ROLE_GESTIONNAIRE')){
            throw $this->createAccessDeniedException();
        }

        $prop = new Proprietaire();
        $form   = $this->createForm(ProprietaireType::class, $prop);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $nom = strtoupper($form->get('nom')->getData());
            $prenom = ucfirst($form->get('prenom')->getData());
            $prop->setNom($nom);
            $prop->setPrenom($prenom);
            $em = $this->getDoctrine()->getManager();
            $em->persist($prop);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Propriétaire bien enregistré');

            return $this->redirect('/ng/gestion/proprietaire');
        }

        return $this->render('NGGestionnaireBundle:proprietaire:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function prop_lotAddAction(Request $request, $code){

        if(!$this->isGranted('ROLE_ADMIN', 'ROLE_GESTIONNAIRE')){
            throw $this->createAccessDeniedException();
        }

        $em = $this->getDoctrine()->getManager();
        $copro = $em->getRepository("NGGestionnaireBundle:Copropriete")->uneCopro($code);
        if($copro == null){
            return $this->render("NGAdministrateurBundle:Default:errorCopro.html.twig");
        }

        $prop = new Proprietaire();
        $form   = $this->createForm(ProprietaireType::class, $prop);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $lot = new Lot();
            $em = $this->getDoctrine()->getManager();
            $tl = $em->getRepository("NGAdministrateurBundle:TypeLot")->findOneBy(array('id'=>$_POST['type_lot']));
            $lot->setNum($_POST['num']);
            $resp = $this->verifLot($lot->getNum(), $copro->getId());
            if($resp == false){
                return $this->render('NGGestionnaireBundle:immeuble:prop_lot-add.html.twig', array(
                    'form' => $form->createView(), 'error' => true
                ));
            }
            $lot->setEtage($_POST['etage']);
            $lot->setSurface($_POST['surface']);
            $lot->setCarezze($_POST['carezze']);
            $lot->setPrix($_POST['prix']);
            $lot->setTypeLot($tl);
            $lot->setCopro($copro);
            $lot->setProprietaire($prop);
            $nom = strtoupper($form->get('nom')->getData());
            $prenom = ucfirst($form->get('prenom')->getData());
            $prop->setNom($nom);
            $prop->setPrenom($prenom);
            $em = $this->getDoctrine()->getManager();
            $em->persist($prop);
            $em->flush();
            $em = $this->getDoctrine()->getManager();
            $em->persist($lot);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Propriétaire bien enregistré');

            return $this->redirect('/ng/gestion/immeuble/code/'.$code);
        }

        return $this->render('NGGestionnaireBundle:immeuble:prop_lot-add.html.twig', array(
            'form' => $form->createView(), 'error'=> false,
        ));
    }

    public function verifLot($num, $code)
    {
        $em = $this->getDoctrine()->getManager();
        $lot = $em->getRepository("NGGestionnaireBundle:Lot")->unLot($num, $code);
        if($lot == null){
            return true;
        }
        else{
            return false;
        }
    }


    public function pdfAction($id){
        $em = $this->getDoctrine()->getManager();
        $prop = $em->getRepository("NGGestionnaireBundle:Proprietaire")->findOneBy(array('id'=>$id));
        if($prop == null){
            return $this->render("NGAdministrateurBundle:Default:errorProp.html.twig");
        }
        $lots = $em->getRepository("NGGestionnaireBundle:Lot")->LotProprietaire($id);
        $logo = $this->container->getParameter('kernel.root_dir').'/../web/image/logo.jpg';
        $pdf = new \FPDF();
        $pdf->AddPage();
        $pdf->setTitle(iconv('UTF-8', 'ISO-8859-2',$prop->getNom()." ".$prop->getPrenom()));
        $pdf->SetFont('Arial','B',16);
        $pdf->Image($logo, 10, 10, -300);
        $pdf->Line(10,50,200,50);
        $pdf->Text(150, 44, "Fiche proprietaire");
        $pdf->SetFont('Arial','B',16);
        $pdf->setTextColor(174,31,35);
        $pdf->Text(10, 70, iconv('UTF-8', 'ISO-8859-2',"Civilité : "));
        $pdf->Text(10, 85, "Nom : ");
        $pdf->Text(95, 85, iconv('UTF-8', 'ISO-8859-2',"Prénom : "));
        $pdf->Text(10, 100, iconv('UTF-8', 'ISO-8859-2',"Téléphone : "));
        $pdf->Text(10, 115, "Adresse mail : ");
        $pdf->Text(10, 130, iconv('UTF-8', 'ISO-8859-2',"Adresse : "));
        $pdf->setTextColor(0);
        if( $prop->getSexe() == 0 ){
            $pdf->Text(35, 70, "Mme.");
        }else{
            $pdf->Text(35, 70, "M.");
        }
        $pdf->Text(30, 85, iconv('UTF-8', 'ISO-8859-2',$prop->getNom()));
        $pdf->Text(123, 85, iconv('UTF-8', 'ISO-8859-2',$prop->getPrenom()));
        $pdf->Text(45, 100, $prop->getTel());
        $pdf->Text(52, 115, $prop->getEmail());
        $pdf->Text(40, 130, iconv('UTF-8', 'ISO-8859-2',$prop->getAdresse().", ".$prop->getVille()->getCP()." ".$prop->getVille()->getNom()));
        $pdf->Text(87, 145, "Les Lots");
        $pdf->SetY(150);
        $pdf->SetX(30);
        $pdf->SetFont('Arial','B',12);
        $pdf->SetFillColor(174,31,35);
        $pdf->setTextColor(255,255,255);
        $pdf->Cell(50,6,"Immeuble",1,0,'L',1);
        $pdf->Cell(50,6,iconv('UTF-8', 'ISO-8859-2',"Numéro du Lot"),1,0,'L',1);
        $pdf->Cell(50,6,iconv('UTF-8', 'ISO-8859-2',"Étage "),1,0,'L',1);
        $i = 156;
        foreach( $lots as $unL ){
            $pdf->SetTextColor(0);
            $pdf->SetFont('Arial','',12);
            $pdf->SetXY(30,$i);
            $pdf->MultiCell(50,6,$unL->getCopro()->getCode(),1);
            $pdf->SetXY(80,$i);
            $pdf->MultiCell(50,6,$unL->getNum(),1);
            $pdf->SetXY(130,$i);
            $pdf->MultiCell(50,6,iconv('UTF-8', 'ISO-8859-2',$unL->getEtage()),1);
            $i = $i + 6;
        }
        return new Response($pdf->Output());
    }

    public function consultAction($id){
        $em = $this->getDoctrine()->getManager();
        $prop = $em->getRepository("NGGestionnaireBundle:Proprietaire")->findOneBy(array('id'=>$id));
        if($prop == null){
            return $this->render("NGAdministrateurBundle:Default:errorProp.html.twig");
        }
        $lots = $em->getRepository("NGGestionnaireBundle:Lot")->LotProprietaire($id);
        return $this->render("NGGestionnaireBundle:proprietaire:consult.html.twig");
    }

}