<?php

namespace App\Controller;

use App\Entity\Commandes;
use App\Form\CommandesType;
use App\Form\CommandesEditType;
use App\Repository\UtilisateursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Mediumart\Orange\SMS\SMS;
use Mediumart\Orange\SMS\Http\SMSClient;

/**
 * @Route("/commandes")
 */
class CommandesController extends AbstractController
{
    /**
     * @Route("/", name="app_commandes_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $commandes = $entityManager
            ->getRepository(Commandes::class)
            ->findAll();

        return $this->render('commandes/index.html.twig', [
            'commandes' => $commandes,
        ]);
    }

    /**
     * @Route("/new", name="app_commandes_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $commande = new Commandes();
        $form = $this->createForm(CommandesType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commande);
            $entityManager->flush();

            return $this->redirectToRoute('app_commandes_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commandes/new.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/new{}", name="app_commandes_newC", methods={"GET", "POST"})
     */
    public function newC(Request $request, EntityManagerInterface $entityManager,UtilisateursRepository $utilisateursRepository): Response
    {
        $commande = new Commandes();
        $session=$request->getSession();
        $user=$utilisateursRepository->find($session->get('id_user'));
        $numtel=$user->getNumtel();

        $commande->setDatecreation(new \DateTime());
        $commande->setNumeroutilisateur($user);
        $date = new \DateTime();

        $date->modify('+4 day');
        $date->format('Y-m-d') . "\n";
        $commande->setDateenvoi($date);
        $commande->setStatut("non livré");




            $entityManager->persist($commande);
            $entityManager->flush();

/*sms*/
        $client = SMSClient::getInstance('sCJ6trdAdQprnSYOBDXjWBkhts8LBn4I', 'zxC98R8HtbxSETS5');



        $sms = new SMS($client);
        $sms->message('cher(e) client(e) , votre commande numéro '.$commande->getNumerocommande().' est en cours de traitement ( '.$commande->getStatut().' ).   ApeShop ')

            ->from('+21695582541')
            ->to("+216".$numtel)
            ->send();

       return $this->redirectToRoute('app_paniers_index');

    }

    /**
     * @Route("/{numerocommande}", name="app_commandes_show", methods={"GET"})
     */
    public function show(Commandes $commande): Response
    {
        return $this->render('commandes/show.html.twig', [
            'commande' => $commande,
        ]);
    }

    /**
     * @Route("/{numerocommande}/edit", name="app_commandes_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Commandes $commande, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CommandesEditType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_commandes_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commandes/edit.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{numerocommande}", name="app_commandes_delete", methods={"POST"})
     */
    public function delete(Request $request, Commandes $commande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commande->getNumerocommande(), $request->request->get('_token'))) {
            $entityManager->remove($commande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_commandes_index', [], Response::HTTP_SEE_OTHER);
    }
}
