<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontOfficeController extends AbstractController
{
    /**
     * @Route("/front/office", name="app_front_office")
     */
    public function index(): Response
    {
        return $this->render('front_office/index.html.twig', [
            'controller_name' => 'FrontOfficeController',
        ]);
    }

    /**
     * @return Response
     * @Route("/ApeShop/home",name="apeshop_home")
     */
    public function home()
    {
        return $this->render('front_office/home.html.twig', [
            'controller_name' => 'FrontOfficeController',
        ]);
    }
}
