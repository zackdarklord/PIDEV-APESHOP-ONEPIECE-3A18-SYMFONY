<?php

namespace App\Controller;

use App\Entity\Categoriea;
use App\Form\CategorieaType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/categoriea")
 */
class CategorieaController extends AbstractController
{
    /**
     * @Route("/", name="app_categoriea_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $categorieas = $entityManager
            ->getRepository(Categoriea::class)
            ->findAll();

        return $this->render('categoriea/index.html.twig', [
            'categorieas' => $categorieas,
        ]);
    }

    /**
     * @Route("/new", name="app_categoriea_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $categoriea = new Categoriea();
        $form = $this->createForm(CategorieaType::class, $categoriea);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() ) {
            $entityManager->persist($categoriea);
            $entityManager->flush();

            return $this->redirectToRoute('app_categoriea_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('categoriea/new.html.twig', [
            'categoriea' => $categoriea,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idcategorie}", name="app_categoriea_show", methods={"GET"})
     */
    public function show(Categoriea $categoriea): Response
    {
        return $this->render('categoriea/show.html.twig', [
            'categoriea' => $categoriea,
        ]);
    }

    /**
     * @Route("/{idcategorie}/edit", name="app_categoriea_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Categoriea $categoriea, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CategorieaType::class, $categoriea);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_categoriea_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('categoriea/edit.html.twig', [
            'categoriea' => $categoriea,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idcategorie}", name="app_categoriea_delete", methods={"POST"})
     */
    public function delete(Request $request, Categoriea $categoriea, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categoriea->getIdcategorie(), $request->request->get('_token'))) {
            $entityManager->remove($categoriea);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_categoriea_index', [], Response::HTTP_SEE_OTHER);
    }
}
