<?php

namespace NG\ComptableBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NGComptableBundle:Default:region_index.html.twig');
    }
}
