<?php

namespace App\Controller;

use App\Entity\Forums;
use App\Form\ForumsType;
use App\Repository\CommentairesRepository;
use App\Repository\ForumsRepository;
use MercurySeries\FlashyBundle\FlashyNotifier;
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
     * @Route("/3", name="app_forums_index3", methods={"GET"})
     */
    public function index3(ForumsRepository $forumsRepository,CommentairesRepository $commentairesRepository): Response
    {
        return $this->render('forums/index3.html.twig', [
            'forums' => $forumsRepository->findAll(),'commentaires' => $commentairesRepository->findAll(),
        ]);
    }
    /**
     * @Route("/f", name="app_forums_index_front", methods={"GET"})
     */
    public function index_front(ForumsRepository $forumsRepository): Response
    {
        return $this->render('forums/index_front.html.twig', [
            'forums' => $forumsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_forums_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ForumsRepository $forumsRepository, FlashyNotifier $flashy): Response
    {
        $forum = new Forums();
        $form = $this->createForm(ForumsType::class, $forum);
        $form->handleRequest($request);
        $forum->setDateajout(\DateTime::createFromFormat('d/m/Y',date('d/m/Y')));

        if ($form->isSubmitted() && $form->isValid()) {
            $forumsRepository->add($forum);
            $flashy->success('forum Ajouté avec succes ', 'app_forums_index');
            return $this->redirectToRoute('app_forums_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('forums/new.html.twig', [
            'forum' => $forum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{sujetforum}", name="app_forums_show", methods={"GET"})
     */
    public function show(CommentairesRepository  $commentairesRepository,Forums $forum): Response
    {
        return $this->render('forums/show.html.twig', [
            'commentaires' => $commentairesRepository->findAll(),'forum' => $forum,
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
    /**
     * @Route("/", name="app_forums_index_1", methods={"post"})
     */
    public function indexRechercher(ForumsRepository $forumsRepository): Response
    {

        return $this->render('forums/index.html.twig', [
            'forums' => $forumsRepository->findByUser($_POST['query']),
        ]);
    }

}
