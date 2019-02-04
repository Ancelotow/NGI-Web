<?php

namespace NG\GestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NG\GestionnaireBundle\Entity\AG;
use NG\GestionnaireBundle\Form\AGType;
use Symfony\Component\HttpFoundation\Request;

class AGController extends Controller
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
        $habs = $em->getRepository("NGGestionnaireBundle:Habitant")->lesHabs($copro->getId());
        $ag = new AG();
        $form   = $this->createForm(AGType::class, $ag);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ag);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'AG bien enregistrer');

            return $this->redirect('/ng/gestion/immeuble/code/'.$code);
        }

        return $this->render('NGGestionnaireBundle:immeuble:ag-add.html.twig', array(
            'form' => $form->createView(),
            'habs' => $habs,
        ));
    }

}