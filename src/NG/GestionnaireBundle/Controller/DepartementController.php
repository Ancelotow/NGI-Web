<?php

namespace NG\GestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NG\GestionnaireBundle\Entity\Departement;
use NG\GestionnaireBundle\Form\DepartementType;
use Symfony\Component\HttpFoundation\Request;

class DepartementController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $depts = $em->getRepository("NGGestionnaireBundle:Departement")->allDept();
        return $this->render('NGGestionnaireBundle:geolocalisation:dept_index.html.twig', array("depts"=>$depts));
    }

    public function addAction(Request $request){

        if(!$this->isGranted(array('ROLE_GESTIONNAIRE', 'ROLE_ADMIN'))){
            throw $this->createAccessDeniedException();
        }

        $dept = new Departement();
        $form   = $this->createForm(DepartementType::class, $dept);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($dept);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Departement bien enregistrer');

            return $this->redirect('/ng/geolocalisation/departement');
        }

        return $this->render('NGGestionnaireBundle:geolocalisation:dept_add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}