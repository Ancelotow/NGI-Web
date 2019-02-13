<?php

namespace NG\GestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NG\GestionnaireBundle\Entity\Habitant;
use NG\GestionnaireBundle\Form\HabitantType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HabitantController extends Controller
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
        $hab = new Habitant();
        $form   = $this->createForm(HabitantType::class, $hab, array('idCopro'=>$copro->getId()));

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $hab->setNom(strtoupper($hab->getNom()));
            $hab->setPrenom(ucfirst($hab->getPrenom()));
            $hab->setDateEmmenagement($_POST['dateE']);
            $hab->setMembreCS($_POST['cs']);
            $hab->setPresidentCS($_POST['pcs']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($hab);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Habitant bien enregistrer');

            return $this->redirect('/ng/gestion/immeuble/code/'.$code);
        }

        return $this->render('NGGestionnaireBundle:immeuble:hab-add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function pdfAction($id){
        $em = $this->getDoctrine()->getManager();
        $hab = $em->getRepository("NGGestionnaireBundle:Habitant")->findOneBy(array('id'=>$id));
        if($hab == null){
            return $this->render("NGAdministrateurBundle:Default:errorHab.html.twig");
        }
        $logo = $this->container->getParameter('kernel.root_dir').'/../web/image/logo.jpg';
        $pdf = new \FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Image($logo, 10, 10, -300);
        $pdf->Line(10,50,200,50);
        $pdf->Text(150, 44, "Fiche Habitant");
        $pdf->setTextColor(174,31,35);
        $pdf->Text(10, 70, "Civilite : ");
        $pdf->Text(10, 85, "Nom : ");
        $pdf->Text(100, 85, iconv('UTF-8', 'ISO-8859-2',"Prénom : "));
        $pdf->Text(10, 100, iconv('UTF-8', 'ISO-8859-2',"Date d'émmenagement : "));
        $pdf->Text(10, 115, "Adresse mail : ");
        $pdf->Text(10, 130, iconv('UTF-8', 'ISO-8859-2',"Téléphone : "));
        $pdf->Text(10, 145, "Immeuble : ");
        $pdf->Text(100, 145, "Lot : ");
        $pdf->Text(10, 160, "Membre du CS : ");
        $pdf->Text(100, 160, iconv('UTF-8', 'ISO-8859-2',"Président du CS : "));
        $pdf->setTextColor(0,0,0);
        if( $hab->getSexe() == 0) {
            $pdf->Text(35, 70, "Mme.");
        }else{
            $pdf->Text(35, 70, "M.");
        }
        $pdf->Text(30, 85, iconv('UTF-8', 'ISO-8859-2',$hab->getNom()));
        $pdf->Text(128, 85, iconv('UTF-8', 'ISO-8859-2',$hab->getPrenom()));
        $pdf->Text(80, 100, $hab->getDateEmmenagement());
        $pdf->Text(52, 115, $hab->getEmail());
        $pdf->Text(45, 130, $hab->getTel());
        $pdf->Text(43, 145, $hab->getlot()->getCopro()->getCode());
        $pdf->Text(115, 145, $hab->getlot()->getNum());
        if( $hab->getMembreCS() == 1 ){
            $pdf->Text(55, 160, "Oui");
        }else{
            $pdf->Text(55, 160, "Non");
        }
        if( $hab->getPresidentCS() == 1 ){
            $pdf->Text(150, 160, "Oui");
        }else{
            $pdf->Text(150, 160, "Non");
        }
        $pdf->setTitle($hab->getNom()." ".$hab->getPrenom());
        return new Response($pdf->Output(iconv('UTF-8', 'ISO-8859-2',"Habitant_".$hab->getNom()."-".$hab->getPrenom()).".pdf", 'I'));
    }

}