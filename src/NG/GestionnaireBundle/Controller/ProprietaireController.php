<?php

namespace NG\GestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NG\GestionnaireBundle\Entity\Proprietaire;
use NG\GestionnaireBundle\Form\ProprietaireType;
use NG\GestionnaireBundle\Entity\Lot;
use NG\AdministrateurBundle\Entity\TypeLot;
use Symfony\Component\HttpFoundation\Request;

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

}