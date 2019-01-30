<?php

namespace NG\AdministrateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NG\AdministrateurBundle\Entity\Entreprise;
use NG\AdministrateurBundle\Form\EntrepriseType;
use Symfony\Component\HttpFoundation\Request;

class PartenaireController extends Controller
{
    public function indexAction()
    {
        if(!$this->isGranted('ROLE_ADMIN')){
            throw $this->createAccessDeniedException();
        }

        $em = $this->getDoctrine()->getManager();
        $ents = $em->getRepository("NGAdministrateurBundle:Entreprise")->allEnts();
        return $this->render('NGAdministrateurBundle:entreprise:partenaire_index.html.twig', array("ents"=>$ents));
    }

    public function addAction(Request $request){

        if(!$this->isGranted('ROLE_ADMIN')){
            throw $this->createAccessDeniedException();
        }

        $ent = new Entreprise();
        $form   = $this->createForm(EntrepriseType::class, $ent);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $file = $ent->getLogo();
            $filename = $this->generateUniqueFileName().'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('partenaire_directory'),
                $filename
            );
            $ent->setLogo($filename);
            $em = $this->getDoctrine()->getManager();
            $em->persist($ent);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Partenaire bien enregistrer');

            return $this->redirect('/ng/immobilier/partenaire');
        }

        return $this->render('NGAdministrateurBundle:entreprise:partenaire_add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }

}