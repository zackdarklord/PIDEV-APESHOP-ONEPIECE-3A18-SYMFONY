<?php

namespace App\Controller;

use App\Entity\Avis;

use App\Form\AvisType;
use App\Form\AvisType2;
use App\Repository\AvisRepository;
use App\Repository\UtilisateursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Snipe\BanBuilder\CensorWords;

/**
 * @Route("/avis")
 */
class AvisController extends AbstractController
{
    /**
     * @Route("/", name="app_avis_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $avis = $entityManager
            ->getRepository(Avis::class)
            ->findAll();

        return $this->render('avis/index.html.twig', [
            'avis' => $avis,
        ]);
    }
    /**
     * @Route("/", name="app_avis_index_1", methods={"post"})
     */
    public function indexRechercher(AvisRepository $avisRepository): Response
    {

        return $this->render('avis/index.html.twig', [
            'avis' => $avisRepository->findByUser2($_POST['query']),
        ]);
    }
    /**
     * @Route("/Front", name="app_avis_indexFront", methods={"GET"})
     */
    public function indexFront(EntityManagerInterface $entityManager,Request $request,PaginatorInterface $paginator): Response
    {
        $donnees = $entityManager
            ->getRepository(Avis::class)
            ->findAll();
        $avis =$paginator->paginate(
            $donnees,$request->query->getInt('page',1),5

        );
        return $this->render('avis/indexFront.html.twig', [
            'avis' => $avis,
        ]);
    }
    /**
     * @Route("/Front", name="app_avis_indexFront_1", methods={"post"})
     */
    public function indexRechercher2(AvisRepository $avisRepository,Request $request,PaginatorInterface $paginator): Response
    {     $data=$avisRepository->findByUser($_POST['query']);

        $avis =$paginator->paginate(
            $data,$request->query->getInt('page',1),count($data)

        );

        return $this->render('avis/indexFront.html.twig', [
            'avis' => $avis,
        ]);
    }
//    /**
//     * @Route("/Front", name="app_avis_indexFront_1", methods={"post"})
//     */
//    public function indexRechercher2(AvisRepository $avisRepository): Response
//    {
//
//        return $this->render('avis/indexFront.html.twig', [
//            'avis' => $avisRepository->findByUser($_POST['query']),
//        ]);
//    }

//    /**
//     * @Route("/Front", name="app_avis_indexFront_1", methods={"post"})
//     */
//    public function indexRechercher2(AvisRepository $avisRepository,Request $request,PaginatorInterface $paginator): Response
//    {
//        $donnees =$this->getDoctrine()->getRepository(Avis::class)->findAll();
////        $donnees =$this->getDoctrine()->getManager()->getRepository(Avis::class)->findAll();
//        $Avis =$paginator->paginate(
//            $donnees,$request->query->getInt('page',1),5
//
//        );
//        return $this->render('avis/indexFront.html.twig', [
//            'avis' => $avisRepository->findByUser($_POST['query']),
//        ]);
//    }



    /**
     * @Route("/Front", name="app_avis_indexFront_2", methods={"post"})
     */
    public function indexRechercher3(AvisRepository $avisRepository): Response
    {

        return $this->render('avis/indexFront.html.twig', [
            'avis' => $avisRepository->findByUser3($_POST['query']),
        ]);
    }

    /**
     * @Route("/new/{id}", name="app_avis_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager,$id,UtilisateursRepository $utilisateursRepository): Response
    {
        $avi = new Avis();
        $user=$utilisateursRepository->find($id);
        $form = $this->createForm(AvisType::class, $avi);
        $avi->setNumeroutilisateur($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $censor = new CensorWords;
            $langs = array('fr','en-us');
            $badwords = $censor->setDictionary($langs);
            $string = $censor->censorString($avi->getContenuavis());
            $avi->setContenuavis($string['clean']);
            $entityManager->persist($avi);
            $entityManager->flush();

            //json_encode($string)
            //@zackdarklord says "hello";
            //@AhmedBg says "THANKS";





            $this->addFlash('message','le message a ete envoyer');

            return $this->redirectToRoute('app_avis_indexFront', [], Response::HTTP_SEE_OTHER);

        }

        return $this->render('avis/new.html.twig', [
            'avi' => $avi,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{idavis}", name="app_avis_show", methods={"GET"})
     */
    public function show(Avis $avi): Response
    {
        return $this->render('avis/show.html.twig', [
            'avi' => $avi,
        ]);
    }

    /**
     * @Route("/{idavis}/edit", name="app_avis_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Avis $avi, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_avis_indexFront', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('avis/edit.html.twig', [
            'avi' => $avi,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idavis}/edit2", name="app_avis_edit2", methods={"GET", "POST"})
     */
    public function edit2(Request $request, Avis $avi, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AvisType2::class, $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $censor = new CensorWords;
            $langs = array('fr','en-us');
            $badwords = $censor->setDictionary($langs);
            $string = $censor->censorString($avi->getContenuavis());
            $avi->setContenuavis($string['clean']);
            $entityManager->flush();

            return $this->redirectToRoute('app_avis_indexFront', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('avis/edit2.html.twig', [
            'avi' => $avi,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{idavis}", name="app_avis_delete", methods={"POST"})
     */
    public function delete(Request $request, Avis $avi, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$avi->getIdavis(), $request->request->get('_token'))) {
            $entityManager->remove($avi);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_avis_indexFront', [], Response::HTTP_SEE_OTHER);
    }





}