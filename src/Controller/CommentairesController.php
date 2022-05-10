<?php

namespace App\Controller;

use App\Entity\Commentaires;
use App\Form\CommentairesType;
use App\Repository\CommentairesRepository;
use App\Repository\ForumsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use MercurySeries\FlashyBundle\FlashyNotifier;

/**
 * @Route("/commentaires")
 */
class CommentairesController extends AbstractController
{
    /**
     * @Route("/", name="app_commentaires_index", methods={"GET"})
     */
    public function index(CommentairesRepository $commentairesRepository): Response
    {
        return $this->render('commentaires/index.html.twig', [
            'commentaires' => $commentairesRepository->findAll(),
        ]);
    }
    /**
     * @Route("/s", name="app_commentaires_index_front", methods={"GET"})
     */
    public function index_front(CommentairesRepository $commentairesRepository,ForumsRepository $forumsRepository): Response
    {
        return $this->render('commentaires/index_front.html.twig', [
            'commentaires' => $commentairesRepository->findAll(),'forums' => $forumsRepository->findAll(),
        ]);
    }
    /**
     * @Route("/M", name="app_commentaires_index2", methods={"GET"})
     */
    public function index2(CommentairesRepository $commentairesRepository,ForumsRepository $forumsRepository): Response
    {
        return $this->render('commentaires/index2.html.twig', [
            'commentaires' => $commentairesRepository->findAll(),'forums' => $forumsRepository->findAll(),
        ]);
    }


    /**
     * @Route("/new", name="app_commentaires_new", methods={"GET", "POST"})
     */
    public function new(Request $request, CommentairesRepository $commentairesRepository, FlashyNotifier $flashy): Response
    {
        $commentaire = new Commentaires();
        $form = $this->createForm(CommentairesType::class, $commentaire);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $commentairesRepository->add($commentaire);
            $flashy->primaryDark('Commentaire Ajouté avec succes', ' ');

            return $this->redirectToRoute('app_commentaires_index_front', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commentaires/new.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idcommentaire}", name="app_commentaires_show", methods={"GET"})
     */
    public function show(Commentaires $commentaire): Response
    {
        return $this->render('commentaires/show.html.twig', [
            'commentaire' => $commentaire,
        ]);
    }

    /**
     * @Route("/{idcommentaire}/edit", name="app_commentaires_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Commentaires $commentaire, CommentairesRepository $commentairesRepository): Response
    {
        $form = $this->createForm(CommentairesType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentairesRepository->add($commentaire);
            return $this->redirectToRoute('app_commentaires_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commentaires/edit.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idcommentaire}", name="app_commentaires_delete", methods={"POST"})
     */
    public function delete(Request $request, Commentaires $commentaire, CommentairesRepository $commentairesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commentaire->getIdcommentaire(), $request->request->get('_token'))) {
            $commentairesRepository->remove($commentaire);
        }

        return $this->redirectToRoute('app_commentaires_index', [], Response::HTTP_SEE_OTHER);
    }

}
