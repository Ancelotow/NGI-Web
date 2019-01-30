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

    public function addAction(Request $request){

        if(!$this->isGranted('ROLE_ADMIN', 'ROLE_GESTIONNAIRE')){
            throw $this->createAccessDeniedException();
        }

        $cop = new Copropriete();
        $form   = $this->createForm(CoproprieteType::class, $cop);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
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
            'form' => $form->createView(),
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
        if($copro == null){
            return $this->render("NGAdministrateurBundle:Default:errorCopro.html.twig");
        }
        return $this->render('NGGestionnaireBundle:immeuble:copro.html.twig', array("copro"=>$copro));
    }

}