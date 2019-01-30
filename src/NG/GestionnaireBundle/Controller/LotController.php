<?php

namespace NG\GestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NG\GestionnaireBundle\Entity\Lot;
use NG\GestionnaireBundle\Entity\Copropriete;
use NG\GestionnaireBundle\Form\LotType;
use NG\GestionnaireBundle\Form\CoproprieteType;
use Symfony\Component\HttpFoundation\Request;

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
            $resp = $this->verif($lot->getNum());
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

    public function verif($num)
    {
        $em = $this->getDoctrine()->getManager();
        $lot = $em->getRepository("NGGestionnaireBundle:Lot")->unLot($num);
        if($lot == null){
            return true;
        }
        else{
            return false;
        }
    }


}