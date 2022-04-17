<?php

namespace App\Controller;

use App\Entity\Categoriep;
use App\Form\CategoriepType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/categoriep")
 */
class CategoriepController extends AbstractController
{
    /**
     * @Route("/", name="app_categoriep_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $categorieps = $entityManager
            ->getRepository(Categoriep::class)
            ->findAll();

        return $this->render('categoriep/index.html.twig', [
            'categorieps' => $categorieps,
        ]);
    }

    /**
     * @Route("/new", name="app_categoriep_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $categoriep = new Categoriep();
        $form = $this->createForm(CategoriepType::class, $categoriep);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($categoriep);
            $entityManager->flush();

            return $this->redirectToRoute('app_categoriep_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('categoriep/new.html.twig', [
            'categoriep' => $categoriep,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idcategorie}", name="app_categoriep_show", methods={"GET"})
     */
    public function show(Categoriep $categoriep): Response
    {
        return $this->render('categoriep/show.html.twig', [
            'categoriep' => $categoriep,
        ]);
    }

    /**
     * @Route("/{idcategorie}/edit", name="app_categoriep_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Categoriep $categoriep, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CategoriepType::class, $categoriep);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_categoriep_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('categoriep/edit.html.twig', [
            'categoriep' => $categoriep,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idcategorie}", name="app_categoriep_delete", methods={"POST"})
     */
    public function delete(Request $request, Categoriep $categoriep, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categoriep->getIdcategorie(), $request->request->get('_token'))) {
            $entityManager->remove($categoriep);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_categoriep_index', [], Response::HTTP_SEE_OTHER);
    }
}
