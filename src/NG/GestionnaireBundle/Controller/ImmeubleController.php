<?php

namespace NG\GestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NG\GestionnaireBundle\Entity\Copropriete;
use NG\GestionnaireBundle\Form\CoproprieteType;
use Symfony\Component\HttpFoundation\Request;

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
        return $this->render('NGGestionnaireBundle:immeuble:copro.html.twig', array(
            "copro"=>$copro,
            "lots"=>$lots,
            "props"=>$props,
            "habs"=>$habs,
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

}