<?php

namespace App\Controller;
use App\Entity\Avis;
use App\Entity\Repavis;
use App\Form\RepavisType;
use App\Repository\AvisRepository;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/repavis")
 */
class RepavisController extends AbstractController
{
    /**
     * @Route("/", name="app_repavis_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $repavis = $entityManager
            ->getRepository(Repavis::class)
            ->findAll();

        return $this->render('repavis/index.html.twig', [
            'repavis' => $repavis,
        ]);
    }

    /**
     * @Route("/new", name="app_repavis_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager,AvisRepository $repository): Response
    {
        $repavi = new Repavis();
        $form = $this->createForm(RepavisType::class, $repavi);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

//            ,\Swift_Mailer $mailer
//            $message = (new \Swift_Message('Hello you got Email'))
//                ->setFrom('benguebilaahmed@gmail.com')
//                ->setTo('benguebilaahmed@gmail.com')
//                ->setBody(
//                       $repavi['reponse'],'text/plain'
//
//                );
//            $mailer->send($message);


            $entityManager->persist($repavi);

            $entityManager->flush();
            $repository->update( intval($repavi->getIdrep()) ,$repavi->getIdavis());
            return $this->redirectToRoute('app_repavis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('repavis/new.html.twig', [
            'repavi' => $repavi,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{idrep}", name="app_repavis_show", methods={"GET"})
     */
    public function show(Repavis $repavi): Response
    {
        return $this->render('repavis/show.html.twig', [
            'repavi' => $repavi,
        ]);
    }

    /**
     * @Route("/{idrep}/edit", name="app_repavis_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Repavis $repavi, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RepavisType::class, $repavi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_repavis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('repavis/edit.html.twig', [
            'repavi' => $repavi,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idrep}", name="app_repavis_delete", methods={"POST"})
     */
    public function delete(Request $request, Repavis $repavi, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$repavi->getIdrep(), $request->request->get('_token'))) {
            $entityManager->remove($repavi);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_repavis_index', [], Response::HTTP_SEE_OTHER);
    }

    public function editIp(Avis $avi,int $x)
    {   $avi->setIdrep($x);

    }

}
