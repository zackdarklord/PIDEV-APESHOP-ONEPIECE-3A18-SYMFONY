<?php

namespace App\Controller;
use App\Entity\Avis;
use App\Entity\Repavis;
use App\Form\RepavisType;
use App\Form\RepavisType2;
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
    public function new(Request $request, EntityManagerInterface $entityManager,AvisRepository $repository,\Swift_Mailer $mailer): Response
    {
        $repavi = new Repavis();
        $form = $this->createForm(RepavisType::class, $repavi);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            if ($repavi->getEtat()=='Traité' and $repavi->getIdavis()->getNumeroutilisateur()->getAdresse() != NULL )
                {
            $message = (new \Swift_Message('Apeshop'))
                ->setFrom( $repavi->getIdavis()->getNumeroutilisateur()->getEmail())
                ->setTo('benguebilaahmed@gmail.com')

                ->addcc($repavi->getIdavis()->getNumeroutilisateur()->getEmail())
                ->setBody(
                    $this->renderView(
                        'repavis/mailing.html.twig',compact('repavi')
                    ),
                    'text/html'       );

            $mailer->send($message);
            $this->addFlash('message','le message a ete envoyer');
                }

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
    public function edit(Request $request, Repavis $repavi, EntityManagerInterface $entityManager,\Swift_Mailer $mailer): Response
    {
        $form = $this->createForm(RepavisType::class, $repavi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($repavi->getEtat()=='Traité' and $repavi->getIdavis()->getNumeroutilisateur()->getAdresse() != NULL )
            {
                $message = (new \Swift_Message('Apeshop'))
                    ->setFrom( $repavi->getIdavis()->getNumeroutilisateur()->getEmail())
                    ->setTo('benguebilaahmed@gmail.com')
                    ->addcc($repavi->getIdavis()->getNumeroutilisateur()->getEmail())
                    ->setBody(
                        $this->renderView(
                            'repavis/mailing.html.twig',compact('repavi')
                        ),
                        'text/html'       );

                $mailer->send($message);
                $this->addFlash('message','le message a ete envoyer');
            }



            $entityManager->flush();

            return $this->redirectToRoute('app_repavis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('repavis/edit.html.twig', [
            'repavi' => $repavi,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{idrep}/edit2", name="app_repavis_edit2", methods={"GET", "POST"})
     */
    public function edit2(Request $request, Repavis $repavi, EntityManagerInterface $entityManager,\Swift_Mailer $mailer): Response
    {
        $form = $this->createForm(RepavisType2::class, $repavi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($repavi->getEtat()=='Traité' and $repavi->getIdavis()->getNumeroutilisateur()->getAdresse() != NULL )
            {
                $message = (new \Swift_Message('Apeshop'))
                    ->setFrom( $repavi->getIdavis()->getNumeroutilisateur()->getEmail())
                    ->setTo('benguebilaahmed@gmail.com')
                    ->addcc($repavi->getIdavis()->getNumeroutilisateur()->getEmail())
                    ->setBody(
                        $this->renderView(
                            'repavis/mailing.html.twig',compact('repavi')
                        ),
                        'text/html'       );

                $mailer->send($message);
                $this->addFlash('message','le message a ete envoyer');
            }



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
