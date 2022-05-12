<?php

namespace App\Controller;

use App\Entity\Commandes;
use App\Entity\Paniers;
use App\Entity\Produits;
use App\Form\CommandesType;
use App\Form\PaniersType;
use App\Form\ProduitsType;
use App\Repository\PaniersRepository;
use App\Repository\UtilisateursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

/**
 * @Route("/produits")
 */
class ProduitsController extends AbstractController
{
    /**
     * @Route("/", name="app_produits_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $produits = $entityManager
            ->getRepository(Produits::class)
            ->findAll();
        // dd($entityManager->getRepository(Produits::class)->findBy(array('quantite' => 0 ) ));



        return $this->render('produits/index.html.twig', [
            'produits' => $produits,
            'quantite0' => $entityManager->getRepository(Produits::class)->findBy(array('quantite' => 0 ) ),
            'nb' => $entityManager->getRepository(Produits::class)->count(array('quantite' => 0 ) ),


        ]);
    }

    /**
     * @Route("/{numeroproduit}/mail", name="app_produits_sendEmail", methods={"GET"})
     */

    public function sendEmail(MailerInterface $mailer, Produits $produit,UtilisateursRepository $repository): Response
    {
        var_dump($produit);
        $utilisateurs=$repository->findAll();
        foreach($utilisateurs as $value){
        $email = (new Email())
            ->from('apeshoppidev@gmail.com')
            //$ù->to('mariem.gnaoui@esprit.tn')
            ->addTo($value->getEmail())


            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('BACK TO STOCK !')
            ->text('Le produit '.$produit->getNomproduit() .' est de retour en stock avec le prix :'.$produit->getPrixunitaire().'DT , Merci de consulter Apeshop');

        $mailer->send($email);
        }

        return $this->redirectToRoute("app_produits_edit",[
            'numeroproduit' => $produit->getNumeroproduit()
        ]);
    }

    public function quantite0(EntityManagerInterface $entityManager): Response
    {

        // dd($entityManager->getRepository(Produits::class)->findBy(array('quantite' => 0 ) ));


        return $this->render('base2.html.twig', [
            'quantite0' => $entityManager->getRepository(Produits::class)->findBy(array('quantite' => 0 ) ),

        ]);
    }

    /**
     * @Route("/front", name="app_produits_front", methods={"GET"})
     */
    public function indexfront(EntityManagerInterface $entityManager,PaginatorInterface $paginator,Request $request): Response
    {

        $em = $this->getDoctrine()->getManager();
        $offersRepository = $em->getRepository(Produits::class);
        $AllProducts = $offersRepository->findAll();
        $produits = $paginator->paginate(
            $AllProducts,
            $request->query->getInt('page',1),
            3
        );


        return $this->render('produits/AficherFront.html.twig', [
            'produits' => $produits,


        ]);
    }


    /**
     * @Route("/new", name="app_produits_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $produit = new Produits();
        $form = $this->createForm(ProduitsType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $request->files->get("produits")["myFiles"];
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);

                try {
                    $imageFile->move(
                        $this->getParameter('uploads_directory'),
                        $originalFilename
                    );
                } catch (FileException $e) {

                }
            }

            $produit->setImage($originalFilename);
            $entityManager->persist($produit);
            $entityManager->flush();

            return $this->redirectToRoute('app_produits_index', [], Response::HTTP_SEE_OTHER);}



        return $this->render('produits/new.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{numeroproduit}", name="app_produits_show", methods={"GET"})
     */
    public function show(Produits $produit): Response
    {
        return $this->render('produits/show.html.twig', [
            'produit' => $produit,
        ]);
    }

    /**
     * @Route("/{numeroproduit}/edit", name="app_produits_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Produits $produit, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProduitsType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $request->files->get("produits")["myFiles"];
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);

                try {
                    $imageFile->move(
                        $this->getParameter('uploads_directory'),
                        $originalFilename
                    );
                } catch (FileException $e) {

                }
            }

            $produit->setImage($originalFilename);
            $entityManager->flush();

            return $this->redirectToRoute('app_produits_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produits/edit.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{numeroproduit}", name="app_produits_delete", methods={"POST"})
     */
    public function delete(Request $request, Produits $produit, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produit->getNumeroproduit(), $request->request->get('_token'))) {
            $entityManager->remove($produit);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_produits_index', [], Response::HTTP_SEE_OTHER);
    }


    /**
     * @Route("/front/{numeroproduit}", name="app_paniers_new", methods={"GET", "POST"})
     */
    public function newPanier(Request $request, EntityManagerInterface $entityManager,Produits $produits, $numeroproduit,PaniersRepository $paniersRepository,UtilisateursRepository $utilisateursRepository): Response
    {

        $produits = $entityManager
            ->getRepository(Produits::class)
            ->findAll();
        $Pquantite = $entityManager
            ->getRepository(Produits::class)
            ->findOneBy(array('numeroproduit' => $numeroproduit ) );
        $Pquantite->setQuantite($Pquantite->getQuantite()-1);
        $entityManager->persist($Pquantite);
        $entityManager->flush();
///panier

        $session = $request->getSession();
        $user=$utilisateursRepository->find($session->get('id_user'));
        $panier = new Paniers();
        $form = $this->createForm(PaniersType::class, $panier);
        $panier->setNumeroproduit($Pquantite);
        $panier->setQuantite(1);
        $panier->setDateajout(\DateTime::createFromFormat('d/m/Y',date('d/m/Y')));
        $panier->setNumeroutilisateur($user);
        $form->handleRequest($request);
        $paniersRepository->add($panier);



        //return $this->redirectToRoute('front', [], Response::HTTP_SEE_OTHER)


return $this->redirectToRoute('app_produits_front');

    }

}
