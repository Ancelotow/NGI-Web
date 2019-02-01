<?php

namespace NG\GestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NG\GestionnaireBundle\Entity\Habitant;
use NG\GestionnaireBundle\Form\HabitantType;
use Symfony\Component\HttpFoundation\Request;

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

}