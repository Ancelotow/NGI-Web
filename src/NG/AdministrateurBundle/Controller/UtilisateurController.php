<?php

namespace NG\AdministrateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;

class UtilisateurController extends Controller
{
    public function indexAction()
    {
        if(!$this->isGranted("ROLE_ADMIN")){
            throw $this->createAccessDeniedException();
        }
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository("AppBundle:User")->findAll();
        return $this->render('NGAdministrateurBundle:entreprise:users_index.html.twig', array("users"=>$users));
    }

    public function blockAction($id)
    {
        if(!$this->isGranted("ROLE_ADMIN")){
            throw $this->createAccessDeniedException();
        }
        $user = new User();
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("AppBundle:User")->findOneBy(array("id"=>$id));
        var_dump($user->getUsername());
        $user->setEnabled(false);
        $this->get('fos_user.user_manager')->updateUser($user, false);
        $this->getDoctrine()->getManager()->flush();
        return $this->redirect('/ng/immobilier/user');
    }

    public function activAction($id)
    {
        if(!$this->isGranted("ROLE_ADMIN")){
            throw $this->createAccessDeniedException();
        }
        $user = new User();
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("AppBundle:User")->findOneBy(array("id"=>$id));
        var_dump($user->getUsername());
        $user->setEnabled(true);
        $this->get('fos_user.user_manager')->updateUser($user, false);
        $this->getDoctrine()->getManager()->flush();
        return $this->redirect('/ng/immobilier/user');
    }

}