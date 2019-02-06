<?php

namespace NG\GestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NGGestionnaireBundle:Default:region_index.html.twig');
    }

    public function pdfAction()
    {
        $pdf = new \FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(40,10,'Hello World !');
        return new Response($pdf->Output(), 200, array('Content-Type'=>'application/Ng immobilier'));
    }
}
