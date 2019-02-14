<?php

namespace NG\GestionnaireBundle\Controller;

use NG\GestionnaireBundle\Entity\ImageSinistre;
use NG\GestionnaireBundle\Entity\SinEnt;
use NG\GestionnaireBundle\Form\ImageSinistreType;
use NG\GestionnaireBundle\Form\SinEntType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NG\GestionnaireBundle\Entity\Sinistre;
use NG\GestionnaireBundle\Form\SinistreType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SinistreController extends Controller
{

    public function addAction(Request $request, $code){

        if(!$this->isGranted(array('ROLE_GESTIONNAIRE', 'ROLE_ADMIN'))){
            throw $this->createAccessDeniedException();
        }
        $em = $this->getDoctrine()->getManager();
        $copro = $em->getRepository("NGGestionnaireBundle:Copropriete")->uneCopro($code);
        if($copro == null){
            return $this->render("NGAdministrateurBundle:Default:errorCopro.html.twig");
        }
        $em = $this->getDoctrine()->getManager();
        $lot = $em->getRepository("NGGestionnaireBundle:Lot")->lotCopro($copro->getId());

        $sin = new Sinistre();
        $form   = $this->createForm(SinistreType::class, $sin, array('id_copro'=>$copro->getId()));
        if(sizeof($lot) == 0){
            return $this->render('NGGestionnaireBundle:immeuble:sin-add.html.twig', array(
                'form' => $form->createView(),
                'errorLot'=>true,
                'errorCode'=>false,
            ));
        }
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $sin->setDate($_POST['dateSin']);
            $em = $this->getDoctrine()->getManager();
            $unSin = $em->getRepository("NGGestionnaireBundle:Sinistre")->unSin($sin->getCode());
            if($unSin != null){
                return $this->render('NGGestionnaireBundle:immeuble:sin-add.html.twig', array(
                    'form' => $form->createView(),
                    'errorLot'=>false,
                    'errorCode'=>true,
                ));
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($sin);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Sinistre bien enregistrer');

            return $this->redirect('/ng/gestion/immeuble/code/'.$code);
        }

        return $this->render('NGGestionnaireBundle:immeuble:sin-add.html.twig', array(
            'form' => $form->createView(),
            'errorLot'=>false,
            'errorCode'=>false,
        ));
    }

    public function indexAction(Request $request, $code)
    {
        $em = $this->getDoctrine()->getManager();
        $sin = $em->getRepository("NGGestionnaireBundle:Sinistre")->unSin($code);
        if( $sin == null ){
            return $this->render('NGAdministrateurBundle:Default:errorSin.html.twig');
        }
        $em = $this->getDoctrine()->getManager();
        $ents = $em->getRepository("NGGestionnaireBundle:SinEnt")->lesCouts($sin->getId());
        $em = $this->getDoctrine()->getManager();
        $images = $em->getRepository("NGGestionnaireBundle:ImageSinistre")->lesImgs($sin->getId());
        $is = new ImageSinistre();
        $formI   = $this->createForm(ImageSinistreType::class, $is);
        if ($request->isMethod('POST') && $formI->handleRequest($request)->isValid()) {
            $file = $is->getUrl();
            $filename = $this->generateUniqueFileName() . '.' . $file->guessExtension();
            $file->move(
                $this->getParameter('image-sinistre_directory'),
                $filename
            );
            $is->setUrl($filename);
            $is->setSinistre($sin);
            $em = $this->getDoctrine()->getManager();
            $em->persist($is);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Image sinistre bien enregistrer');
            return $this->redirect('/ng/gestion/sinistre/'.$sin->getCode());
        }
        $se = new SinEnt();
        $formC   = $this->createForm(SinEntType::class, $se);
        if ($request->isMethod('POST') && $formC->handleRequest($request)->isValid()) {
            $se->setSinistre($sin);
            $em = $this->getDoctrine()->getManager();
            $em->persist($se);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Cout sinistre bien enregistrer');
            return $this->redirect('/ng/gestion/sinistre/code/'.$sin->getCode());
        }
        return $this->render('NGGestionnaireBundle:sinistre:index.html.twig', array(
            "sin"=>$sin,
            "ents"=>$ents,
            "images"=>$images,
            'formI' => $formI->createView(),
            'formC' => $formC->createView(),
        ));
    }

    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }

    public function pdfAction($id){
        $em = $this->getDoctrine()->getManager();
        $sin = $em->getRepository("NGGestionnaireBundle:Sinistre")->findOneBy(array('id'=>$id));
        if($sin == null){
            return $this->render("NGAdministrateurBundle:Default:errorSin.html.twig");
        }
        $se = $em->getRepository("NGGestionnaireBundle:SinEnt")->findBy(array('sinistre'=>$id));
        $logo = $this->container->getParameter('kernel.root_dir').'/../web/image/logo.jpg';
        $pdf = new \FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Image($logo, 10, 10, -300);
        $pdf->Line(10,50,200,50);
        $pdf->Text(150, 44, "Fiche Sinistre");
        $pdf->SetFont('Arial','B',20);
        $pdf->Text(90, 65, $sin->getCode());
        $pdf->SetFont('Arial','B',16);
        $pdf->setTextColor(174,31,35);
        $pdf->Text(10, 85, "Immeuble : ");
        $pdf->Text(100, 85, "Lot : ");
        $pdf->Text(10, 100, "Type : ");
        $pdf->Text(10, 115, "Date : ");
        $pdf->setTextColor(0,0,0);
        $pdf->Text(43, 85, $sin->getLot()->getCopro()->getCode());
        $pdf->Text(115, 85, $sin->getLot()->getNum());
        $pdf->Text(30, 100, iconv('UTF-8', 'ISO-8859-2',$sin->getType()));
        $pdf->Text(29, 115, $sin->getDate());
        $pdf->setTitle("Sinistre ".$sin->getCode());
        $pdf->SetY(130);
        $pdf->SetX(10);
        $pdf->SetFont('Arial','B',12);
        $pdf->SetFillColor(174,31,35);
        $pdf->setTextColor(255,255,255);
        $pdf->Cell(50,6,"Entreprise",1,0,'L',1);
        $pdf->Cell(50,6,"Type entreprise",1,0,'L',1);
        $pdf->Cell(50,6,iconv('UTF-8', 'ISO-8859-2',"Cout (en euros)"),1,0,'L',1);
        $i = 136;
        $total = 0;
        foreach( $se as $unS ){
            $pdf->SetTextColor(0);
            $pdf->SetFont('Arial','',12);
            $pdf->SetXY(10,$i);
            $pdf->MultiCell(50,6,iconv('UTF-8', 'ISO-8859-2',$unS->getEntreprise()->getNom()),1);
            $pdf->SetXY(60,$i);
            $pdf->MultiCell(50,6,iconv('UTF-8', 'ISO-8859-2',$unS->getEntreprise()->getType()),1);
            $pdf->SetXY(110,$i);
            $pdf->MultiCell(50,6,iconv('UTF-8', 'ISO-8859-2',$unS->getCout()),1);
            $i = $i + 6;
            $total = $total + $unS->getCout();
        }
        $pdf->SetXY(10,$i + 6);
        $pdf->SetFillColor(174,31,35);
        $pdf->setTextColor(255,255,255);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(50,6,"Cout total (en euro)",1,0,'L',1);
        $pdf->SetFont('Arial','',12);
        $pdf->SetFillColor(255,255,255);
        $pdf->setTextColor(0);
        $pdf->Cell(50,6,$total,1,0,'L',1);
        return new Response($pdf->Output("Sinistre_".$sin->getCode().".pdf", 'I'));
    }

    public function listeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $sin = $em->getRepository("NGGestionnaireBundle:Sinistre")->findAll();
        return $this->render('NGGestionnaireBundle:sinistre:liste.html.twig', array("sin"=>$sin));
    }

}