<?php

namespace NG\GestionnaireBundle\Controller;

use NG\GestionnaireBundle\Entity\Travaux;
use NG\GestionnaireBundle\Entity\Tvx_part;
use NG\GestionnaireBundle\Form\TravauxType;
use NG\GestionnaireBundle\Form\Tvx_partType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TravauxController extends Controller
{

    public function listeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $tvx = $em->getRepository("NGGestionnaireBundle:Travaux")->findAll();
        return $this->render('NGGestionnaireBundle:travaux:liste.html.twig', array("tvx"=>$tvx));
    }

    public function addAction(Request $request){

        if(!$this->isGranted(array('ROLE_GESTIONNAIRE', 'ROLE_ADMIN'))){
            throw $this->createAccessDeniedException();
        }
        $tvx = new Travaux();
        $form   = $this->createForm(TravauxType::class, $tvx);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $unTvx = $em->getRepository("NGGestionnaireBundle:Travaux")->findOneBy(array('code'=>$tvx->getCode()));
            if($unTvx != null){
                return $this->render('NGGestionnaireBundle:travaux:add.html.twig', array(
                    'form' => $form->createView(),
                    'error'=>true,
                ));
            }
            $tvx->setDateDebut($_POST['debut']);
            $tvx->setDateFin($_POST['fin']);
            $file = $tvx->getImgAv();
            $filename = $this->generateUniqueFileName().'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('travaux_avant'),
                $filename
            );
            $tvx->setImgAv($filename);
            $tvx->setImgAp("vide");
            $em = $this->getDoctrine()->getManager();
            $em->persist($tvx);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Travaux bien enregistrer');

            return $this->redirect('/ng/gestion/travaux');
        }

        return $this->render('NGGestionnaireBundle:travaux:add.html.twig', array(
            'form' => $form->createView(),
            'error'=>false,
        ));
    }

    public function indexAction(Request $request, $code)
    {
        $em = $this->getDoctrine()->getManager();
        $tvx = $em->getRepository("NGGestionnaireBundle:Travaux")->findOneBy(array("code"=>$code));
        if( $tvx == null ){
            return $this->render('NGAdministrateurBundle:Default:errorTvx.html.twig');
        }
        $em = $this->getDoctrine()->getManager();
        $ents = $em->getRepository("NGGestionnaireBundle:Tvx_part")->findBy(array("tvx"=>$tvx->getId()));
        $tvxpart = new Tvx_part();
        $formC   = $this->createForm(Tvx_partType::class, $tvxpart);
        if ($request->isMethod('POST') && $formC->handleRequest($request)->isValid()) {
            $tvxpart->setTvx($tvx);
            $tvxpart->setDateDebut($_POST['debut']);
            $tvxpart->setDateFin($_POST['fin']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($tvxpart);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Cout travaux bien enregistrer');
            return $this->redirect('/ng/gestion/travaux/code/'.$tvx->getCode());
        }
        return $this->render('NGGestionnaireBundle:travaux:index.html.twig', array(
            "tvx"=>$tvx,
            "ents"=>$ents,
            'formC' => $formC->createView(),
        ));
    }

    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }

}