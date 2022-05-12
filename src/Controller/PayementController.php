<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PayementController extends AbstractController
{
    /**
     * @Route("/payement", name="app_payement")
     */
    public function index(): Response
    {
        return $this->render('payement/index.html.twig', [
            'controller_name' => 'PayementController',
        ]);
    }
    /**
     * @Route("/checkout/{total}", name="checkout")
     */
    public function checkout($stripeSK,$total): Response
    {
        \Stripe\Stripe::setApiKey($stripeSK);

        $session = \Stripe\Checkout\Session::create([
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Ape Shop products',
                    ],
                    'unit_amount' =>(integer)$total*100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('success_url',[],UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('cancel_url',[],UrlGeneratorInterface::ABSOLUTE_URL),
        ]);
        //dd($session);
        return $this->redirect($session->url,303);
    }
    /**
     * @Route("/success-url", name="success_url")
     */
    public function successUrl(): Response
    {
        return $this->render('payement/success.html.twig', []);
    }
    /**
     * @Route("/cancel-url", name="cancel_url")
     */
    public function cancelUrl(): Response
    {
        return $this->render('payement/cancel.html.twig', []);
    }
}
