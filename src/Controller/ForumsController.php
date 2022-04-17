<?php

namespace App\Controller;

use App\Entity\Forums;
use App\Form\ForumsType;
use App\Repository\ForumsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/forums")
 */
class ForumsController extends AbstractController
{
    /**
     * @Route("/", name="app_forums_index", methods={"GET"})
     */
    public function index(ForumsRepository $forumsRepository): Response
    {
        return $this->render('forums/index.html.twig', [
            'forums' => $forumsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_forums_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ForumsRepository $forumsRepository): Response
    {
        $forum = new Forums();
        $form = $this->createForm(ForumsType::class, $forum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $forumsRepository->add($forum);
            return $this->redirectToRoute('app_forums_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('forums/new.html.twig', [
            'forum' => $forum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idforum}", name="app_forums_show", methods={"GET"})
     */
    public function show(Forums $forum): Response
    {
        return $this->render('forums/show.html.twig', [
            'forum' => $forum,
        ]);
    }

    /**
     * @Route("/{idforum}/edit", name="app_forums_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Forums $forum, ForumsRepository $forumsRepository): Response
    {
        $form = $this->createForm(ForumsType::class, $forum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $forumsRepository->add($forum);
            return $this->redirectToRoute('app_forums_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('forums/edit.html.twig', [
            'forum' => $forum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idforum}", name="app_forums_delete", methods={"POST"})
     */
    public function delete(Request $request, Forums $forum, ForumsRepository $forumsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$forum->getIdforum(), $request->request->get('_token'))) {
            $forumsRepository->remove($forum);
        }

        return $this->redirectToRoute('app_forums_index', [], Response::HTTP_SEE_OTHER);
    }
}
