<?php

namespace App\Controller;

use App\Entity\Factures;
use App\Form\FacturesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/factures")
 */
class FacturesController extends AbstractController
{
    /**
     * @Route("/", name="app_factures_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $factures = $entityManager
            ->getRepository(Factures::class)
            ->findAll();

        return $this->render('factures/index.html.twig', [
            'factures' => $factures,
        ]);
    }

    /**
     * @Route("/new", name="app_factures_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $facture = new Factures();
        $form = $this->createForm(FacturesType::class, $facture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($facture);
            $entityManager->flush();

            return $this->redirectToRoute('app_factures_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('factures/new.html.twig', [
            'facture' => $facture,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{numerofacture}", name="app_factures_show", methods={"GET"})
     */
    public function show(Factures $facture): Response
    {
        return $this->render('factures/show.html.twig', [
            'facture' => $facture,
        ]);
    }

    /**
     * @Route("/{numerofacture}/edit", name="app_factures_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Factures $facture, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FacturesType::class, $facture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_factures_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('factures/edit.html.twig', [
            'facture' => $facture,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{numerofacture}", name="app_factures_delete", methods={"POST"})
     */
    public function delete(Request $request, Factures $facture, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$facture->getNumerofacture(), $request->request->get('_token'))) {
            $entityManager->remove($facture);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_factures_index', [], Response::HTTP_SEE_OTHER);
    }
}
