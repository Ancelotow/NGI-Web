<?php

namespace NG\GestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NG\GestionnaireBundle\Entity\Sinistre;
use NG\GestionnaireBundle\Form\SinistreType;
use Symfony\Component\HttpFoundation\Request;

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
                'error'=>true
            ));
        }
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $sin->setDate($_POST['dateSin']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($sin);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Sinistre bien enregistrer');

            return $this->redirect('/ng/gestion/immeuble/code/'.$code);
        }

        return $this->render('NGGestionnaireBundle:immeuble:sin-add.html.twig', array(
            'form' => $form->createView(),
            'error'=>false
        ));
    }

}