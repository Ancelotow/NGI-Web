<?php

namespace NG\GestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NG\GestionnaireBundle\Entity\CS;
use NG\GestionnaireBundle\Form\CSType;
use Symfony\Component\HttpFoundation\Request;

class CSController extends Controller
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
        $cs = new CS();
        $form   = $this->createForm(CSType::class, $cs);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $cs->setDate($_POST['dateCS']);
            $cs->setCopro($copro);
            $file = $cs->getPdf();
            $filename = $this->generateUniqueFileName().'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('cs_directory'),
                $filename
            );
            $em = $this->getDoctrine()->getManager();
            $em->persist($cs);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'CS bien enregistrer');

            return $this->redirect('/ng/gestion/immeuble/code/'.$code);
        }

        return $this->render('NGGestionnaireBundle:immeuble:cs-add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }

}