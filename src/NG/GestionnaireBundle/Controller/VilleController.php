<?php

namespace NG\GestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NG\GestionnaireBundle\Entity\Ville;
use NG\GestionnaireBundle\Form\VilleType;
use Symfony\Component\HttpFoundation\Request;

class VilleController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $villes = $em->getRepository("NGGestionnaireBundle:Ville")->allVille();
        return $this->render('NGGestionnaireBundle:geolocalisation:ville_index.html.twig', array("villes"=>$villes));
    }

    public function addAction(Request $request){

        if(!$this->isGranted(array('ROLE_GESTIONNAIRE', 'ROLE_ADMIN'))){
            throw $this->createAccessDeniedException();
        }

        $ville = new Ville();
        $form   = $this->createForm(VilleType::class, $ville);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ville);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Ville bien enregistrer');

            return $this->redirect('/ng/geolocalisation/ville');
        }

        return $this->render('NGGestionnaireBundle:geolocalisation:ville_add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}