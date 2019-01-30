<?php

namespace NG\GestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NG\GestionnaireBundle\Entity\Region;
use NG\GestionnaireBundle\Form\RegionType;
use Symfony\Component\HttpFoundation\Request;

class RegionController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $regions = $em->getRepository("NGGestionnaireBundle:Region")->allRegion();
        return $this->render('NGGestionnaireBundle:geolocalisation:region_index.html.twig', array("regions"=>$regions));
    }

    public function addAction(Request $request){

        if(!$this->isGranted(array('ROLE_GESTIONNAIRE', 'ROLE_ADMIN'))){
            throw $this->createAccessDeniedException();
        }

        $region = new Region();
        $form   = $this->createForm(RegionType::class, $region);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($region);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Région bien enregistrer');

            return $this->redirect('/ng/geolocalisation/region');
        }

        return $this->render('NGGestionnaireBundle:geolocalisation:region_add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
