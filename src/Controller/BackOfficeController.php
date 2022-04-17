<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackOfficeController extends AbstractController
{
    /**
     * @Route("/back/office", name="app_back_office")
     */
    public function index(): Response
    {
        return $this->render('back_office/index.html.twig', [
            'controller_name' => 'BackOfficeController',
        ]);
    }
    /**
     * @Route("/Admin/home/", name="admin_home")
     */
    public function home(): Response
    {
        return $this->render('back_office/admin.html.twig'

        );
    }
}
