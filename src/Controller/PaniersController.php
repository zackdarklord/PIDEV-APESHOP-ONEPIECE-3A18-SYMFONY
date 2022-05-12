<?php

namespace App\Controller;

use App\Entity\Paniers;
use App\Entity\Produits;
use App\Form\PaniersType;
use App\Repository\PaniersRepository;
use App\Repository\ProduitsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/paniers")
 */
class PaniersController extends AbstractController
{
    /**
     * @Route("/", name="app_paniers_index", methods={"GET"})
     */
    public function index(PaniersRepository $paniersRepository,Request $request): Response
    {
        return $this->render('paniers/index.html.twig', [
            'paniers' => $paniersRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_paniers_new", methods={"GET", "POST"})
     */
    public function new(Request $request, PaniersRepository $paniersRepository,ProduitsRepository $produitsRepository): Response
    {
        $panier = new Paniers();
        $form = $this->createForm(PaniersType::class, $panier);
        $panier->setDateajout(\DateTime::createFromFormat('d/m/Y',date('d/m/Y')));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //$produit=$produitsRepository->find($panier->getNumeroproduit()->getNumeroproduit());
            //$panier->setNomproduit($produit);
            $paniersRepository->add($panier);
            return $this->redirectToRoute('app_paniers_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('paniers/new.html.twig', [
            'panier' => $panier,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{numeropanier}", name="app_paniers_show", methods={"GET"})
     */
    public function show(Paniers $panier): Response
    {
        return $this->render('paniers/show.html.twig', [
            'panier' => $panier,
        ]);
    }

    /**
     * @Route("/{numeropanier}/edit", name="app_paniers_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Paniers $panier, PaniersRepository $paniersRepository): Response
    {
        $form = $this->createForm(PaniersType::class, $panier);
        $panier->setDateajout(\DateTime::createFromFormat('d/m/Y',date('d/m/Y')));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $paniersRepository->add($panier);
            return $this->redirectToRoute('app_paniers_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('paniers/edit.html.twig', [
            'panier' => $panier,
            'form' => $form->createView(),
        ]);
    }
#app_resetprod






    /**
     * @Route("/{numeropanier}", name="app_paniers_delete", methods={"POST"})
     */
    public function delete(Request $request, Paniers $panier, PaniersRepository $paniersRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$panier->getNumeropanier(), $request->request->get('_token'))) {

            $paniersRepository->remove($panier);
        }



        return $this->redirectToRoute('app_paniers_index', [], Response::HTTP_SEE_OTHER);
    }
}
