<?php

namespace NG\GestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NG\GestionnaireBundle\Entity\Lot;
use NG\GestionnaireBundle\Entity\Copropriete;
use NG\GestionnaireBundle\Form\LotType;
use NG\GestionnaireBundle\Form\CoproprieteType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LotController extends Controller
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

        $lot = new Lot();
        $form   = $this->createForm(LotType::class, $lot);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $resp = $this->verif($lot->getNum(), $copro->getId());
            if($resp == false){
                return $this->render('NGGestionnaireBundle:immeuble:lot-add.html.twig', array(
                    'form' => $form->createView(), 'error' => true
                ));
            }
            $lot->setCopro($copro);
            $em = $this->getDoctrine()->getManager();
            $em->persist($lot);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Lot bien enregistrer');

            return $this->redirect('/ng/gestion/immeuble/code/'.$code);
        }

        return $this->render('NGGestionnaireBundle:immeuble:lot-add.html.twig', array(
            'form' => $form->createView(), 'error'=>false
        ));
    }

    public function verif($num, $code)
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
        $lot = $em->getRepository("NGGestionnaireBundle:Lot")->findOneBy(array('id'=>$id));
        $sin = $em->getRepository("NGGestionnaireBundle:Sinistre")->findBy(array('lot'=>$id));
        if($lot == null){
            return $this->render("NGAdministrateurBundle:Default:errorLot.html.twig");
        }
        $logo = $this->container->getParameter('kernel.root_dir').'/../web/image/logo.jpg';
        $pdf = new \FPDF();
        $pdf->AddPage();
        $pdf->setTitle($lot->getCopro()->getCode()." : Lot  ".$lot->getNum());
        $pdf->SetFont('Arial','B',16);
        $pdf->Image($logo, 10, 10, -300);
        $pdf->Line(10,50,200,50);
        $pdf->Text(150, 44, "Fiche Lot");
        $pdf->SetFont('Arial','B',20);
        $pdf->Text(90, 65, $lot->getCopro()->getCode()." : Lot  ".$lot->getNum());
        $pdf->SetFont('Arial','B',16);
        $pdf->setTextColor(174,31,35);
        $pdf->Text(10, 85, "Immeuble : ");
        $pdf->Text(85, 85, "Lot : ");
        $pdf->Text(140, 85, iconv('UTF-8', 'ISO-8859-2',"Étage : "));
        $pdf->Text(10, 100, "Surface : ");
        $pdf->Text(85, 100, "Carezze : ");
        $pdf->Text(150, 100, "Prix : ");
        $pdf->Text(10, 115, iconv('UTF-8', 'ISO-8859-2',"Propriétaire : "));
        $pdf->Text(135, 115, "Type : ");
        $pdf->setTextColor(0);
        $pdf->Text(43, 85, $lot->getCopro()->getCode());
        $pdf->Text(100, 85, $lot->getNum());
        $pdf->Text(162, 85, iconv('UTF-8', 'ISO-8859-2',$lot->getEtage()));
        $pdf->Text(38, 100, $lot->GetSurface());
        $pdf->Text(113, 100, $lot->getCarezze());
        $pdf->Text(168, 100, $lot->getPrix());
        if( $lot->getProprietaire()->getSexe() == 0) {
            $pdf->Text(50, 115, iconv('UTF-8', 'ISO-8859-2', "Mme. ".$lot->getProprietaire()->getNom()." ".$lot->getProprietaire()->getPrenom()));
        }else{
            $pdf->Text(50, 115, iconv('UTF-8', 'ISO-8859-2', "M. ".$lot->getProprietaire()->getNom()." ".$lot->getProprietaire()->getPrenom()));
        }
        $pdf->Text(154, 115, iconv('UTF-8', 'ISO-8859-2', $lot->getTypeLot()->getNom()));
        $pdf->Text(87, 130, "Les Sinistres");
        $pdf->SetY(135);
        $pdf->SetX(30);
        $pdf->SetFont('Arial','B',12);
        $pdf->SetFillColor(174,31,35);
        $pdf->setTextColor(255,255,255);
        $pdf->Cell(50,6,"Code",1,0,'L',1);
        $pdf->Cell(50,6,"Type",1,0,'L',1);
        $pdf->Cell(50,6,"Date",1,0,'L',1);
        $i = 141;
        foreach( $sin as $unS ){
            $pdf->SetTextColor(0);
            $pdf->SetFont('Arial','',12);
            $pdf->SetXY(30,$i);
            $pdf->MultiCell(50,6,iconv('UTF-8', 'ISO-8859-2',$unS->getCode()),1);
            $pdf->SetXY(80,$i);
            $pdf->MultiCell(50,6,iconv('UTF-8', 'ISO-8859-2',$unS->getType()),1);
            $pdf->SetXY(130,$i);
            $pdf->MultiCell(50,6,iconv('UTF-8', 'ISO-8859-2',$unS->getDate()),1);
            $i = $i + 6;
        }
        return new Response($pdf->Output());
    }

}