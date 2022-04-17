<?php

namespace App\Controller;

use App\Entity\Utilisateurs;
use App\Entity\Login;
use App\Form\AdminType;
use App\Form\LoginType;
use App\Form\UserType;
use App\Form\UtilisateursType;
use App\Repository\UtilisateursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/utilisateurs")
 */
class UtilisateursController extends AbstractController
{


    /**
     * @Route("/", name="app_utilisateurs_index", methods={"GET"})
     */
    public function index(UtilisateursRepository $utilisateursRepository): Response
    {
        return $this->render('utilisateurs/index.html.twig', [
            'utilisateurs' => $utilisateursRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_utilisateurs_new", methods={"GET", "POST"})
     */
    public function new(Request $request, UtilisateursRepository $utilisateursRepository): Response
    {
        $utilisateur = new Utilisateurs();
        $form = $this->createForm(UserType::class, $utilisateur);
        $utilisateur->setRole("client");
        $utilisateur->setDateinscription(\DateTime::createFromFormat('d/m/Y',date('d/m/Y')));
        $utilisateur->setNomadmin(null);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateursRepository->add($utilisateur);
            return $this->redirectToRoute('app_login_new', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('utilisateurs/new.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/newA", name="app_utilisateurs_newA", methods={"GET", "POST"})
     */
    public function newA(Request $request, UtilisateursRepository $utilisateursRepository): Response
    {
        $utilisateur = new Utilisateurs();
        $form = $this->createForm(AdminType::class, $utilisateur);
        $utilisateur->setRole("admin");
        $utilisateur->setDateinscription(\DateTime::createFromFormat('d/m/Y',date('d/m/Y')));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateursRepository->add($utilisateur);
            return $this->redirectToRoute('app_utilisateurs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('utilisateurs/newA.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{numeroutilisateurs}", name="app_utilisateurs_show", methods={"GET"})
     */
    public function show(Utilisateurs $utilisateur): Response
    {
        return $this->render('utilisateurs/show.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }

    /**
     * @Route("/{numeroutilisateurs}/edit", name="app_utilisateurs_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Utilisateurs $utilisateur, UtilisateursRepository $utilisateursRepository): Response
    {

            $form = $this->createForm(UtilisateursType::class, $utilisateur);

        //$utilisateur->setRole("client");
        //$utilisateur->setDateinscription(\DateTime::createFromFormat('d/m/Y',date('d/m/Y')));
        //$utilisateur->setNomadmin(null);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateursRepository->add($utilisateur);
            return $this->redirectToRoute('app_utilisateurs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('utilisateurs/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{numeroutilisateurs}", name="app_utilisateurs_delete", methods={"POST"})
     */
    public function delete(Request $request, Utilisateurs $utilisateur, UtilisateursRepository $utilisateursRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$utilisateur->getNumeroutilisateurs(), $request->request->get('_token'))) {
            $utilisateursRepository->remove($utilisateur);
        }

        return $this->redirectToRoute('app_utilisateurs_index', [], Response::HTTP_SEE_OTHER);
    }

}
