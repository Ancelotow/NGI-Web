<?php

namespace NG\AdministrateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->redirect('login');
    }

    public function homeAction()
    {
        return $this->render('NGAdministrateurBundle:default:home.html.twig');
    }

}
