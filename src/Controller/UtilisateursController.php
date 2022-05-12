<?php

namespace App\Controller;

use App\Entity\Utilisateurs;
use App\Entity\Login;
use App\Form\AdminType;
use App\Form\LoginType;
use App\Form\UserType;
use App\Form\UtilisateursType;
use App\Repository\UtilisateursRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @Route("/utilisateurs")
 */
class UtilisateursController extends AbstractController
{
    /*----------------------------------JSON-----------------------------*/


    /**
     * @Route("/Alluser", name="allasond")
     */

    public function Alluser(NormalizerInterface $Normalizer){
        $s =   $this->getDoctrine()->getRepository(Utilisateurs::class)->findAll();
        $jsonContent= $Normalizer->normalize($s,'json' ,['groups' =>'post:read' ] );
        return new Response(json_encode($jsonContent));



    }
    /**
     * @Route("/newJsonuser/new", name="newJsonSond")
     */
    public function newJsonSond(Request $Request, EntityManagerInterface $entityManager, NormalizerInterface $Normalizer)
    {
        $S = new Utilisateurs() ;

        //http://127.0.0.1:8000/utilisateurs/newJsonuser/new?eml=a&mdp=a&inc=01-12-2022&role=a&ncli=a&nadm=a&adr=a&bank=12&tel=123&imgn=a&upd=12-12-2002
        //http://127.0.0.1:8000/utilisateurs/updatejsons/86?eml=a&mdp=a&inc=01-12-2022&role=a&ncli=a&nadm=a&adr=a&bank=12&tel=123&imgn=a&upd=12-12-2002
        $S->setEmail($Request->get('eml'));
        $S->setMotdepasse($Request->get('mdp'));
        $S->setDateinscription(new \DateTime ($Request->get('insc')));
        $S->setRole($Request->get('role'));
        $S->setNomclient($Request->get('ncli'));
        $S->setNomadmin($Request->get('nadm'));
        $S->setAdresse($Request->get('adr'));
        $S->setInfocartebancaire($Request->get('bank'));
        $S->setNumtel($Request->get('tel'));
        //$S->setImageFile($Request->get('img'));
        $S->setImageName($Request->get('imgn'));
        $S->setUpdatedAt(new \DateTime($Request->get('upd')));


        $entityManager->persist($S);
        $entityManager->flush();


        $jsonContent= $Normalizer->normalize($S,'json' ,['groups' =>'post:read' ] );
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/updatejsons/{userid}", name="upsnd")
     */
    public function updatejsonsond($userid,Request $Request, EntityManagerInterface $entityManager, NormalizerInterface $Normalizer)
    {
        $S = $this->getDoctrine()->getRepository(Utilisateurs::class)->find($userid);


        $S->setEmail($Request->get('eml'));
        $S->setMotdepasse($Request->get('mdp'));
        $S->setDateinscription(new \DateTime ($Request->get('insc')));
        $S->setRole($Request->get('role'));
        $S->setNomclient($Request->get('ncli'));
        $S->setNomadmin($Request->get('nadm'));
        $S->setAdresse($Request->get('adr'));
        $S->setInfocartebancaire($Request->get('bank'));
        $S->setNumtel($Request->get('tel'));
        //$S->setImageFile($Request->get('img'));
        $S->setImageName($Request->get('imgn'));
        $S->setUpdatedAt(new \DateTime($Request->get('upd')));

        $entityManager->flush();


        $jsonContent= $Normalizer->normalize($S,'json' ,['groups' =>'post:read' ] );
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/deletejsonuser/{userid}", name="deletsondageId")
     */
    public function deletejsonsond($userid,Request $Request, EntityManagerInterface $entityManager, NormalizerInterface $Normalizer)
    {
        $s = $this->getDoctrine()->getRepository(Utilisateurs::class)->find($userid);


        $entityManager->remove($s);
        $entityManager->flush();


        $jsonContent= $Normalizer->normalize($s,'json' ,['groups' =>'post:read' ] );
        return new Response("deleted".json_encode($jsonContent));
    }

    /*---------------------------------END JSON-----------------------------------------*/
    /**
     * @Route("/", name="app_utilisateurs_index_tri", methods={"GET"})
     */
    public function indexTri(UtilisateursRepository $utilisateursRepository): Response
    {
        return $this->render('utilisateurs/index.html.twig', [
            'utilisateurs' => $utilisateursRepository->findAlltri(),
        ]);
    }

    /**
     * @Route("/prof", name="app_utilisateurs_profiler", methods={"GET"})
     */
    public function profile1(UtilisateursRepository $utilisateursRepository,Request $request): Response
    {
        $session = $request->getSession();
        $id= $session->get('user_id');
        return $this->render('utilisateurs/profile.html.twig',
            [
                'utilisateur' => $utilisateursRepository->findOneByUsername($session->get('username'))
            ]);
    }

    /**
     * @Route("/", name="app_utilisateurs_index", methods={"GET"})
     */
    public function index(UtilisateursRepository $utilisateursRepository): Response
    {
        $users=$utilisateursRepository->findAll();


        return $this->render('utilisateurs/index.html.twig', [
            'utilisateurs' => $users,
        ]);
    }

    /**
     * @Route("/profile", name="app_utilisateurs_profile", methods={"GET"})
     */
    public function profile(UtilisateursRepository $utilisateursRepository,Request $request): Response
    {
        $session = $request->getSession();
        $id= $session->get('user_id');
        return $this->render('utilisateurs/user_profile.html.twig', [
            'utilisateur' => $utilisateursRepository->findOneByUsername($session->get('username')),
        ]);
    }


    /**
     * @Route("/new", name="app_utilisateurs_new", methods={"GET", "POST"})
     */
    public function new(Request $request, UtilisateursRepository $utilisateursRepository ,UserPasswordEncoderInterface $encoder): Response
    {
        $utilisateur = new Utilisateurs();
        $form = $this->createForm(UserType::class, $utilisateur);
        $utilisateur->setRole("client");
        $utilisateur->setDateinscription(\DateTime::createFromFormat('d/m/Y',date('d/m/Y')));
        $utilisateur->setNomadmin(null);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $plainPassword = $utilisateur->getMotdepasse();
            $encoded = $encoder->encodePassword($utilisateur, $plainPassword);
            $utilisateur->setMotdepasse($encoded);
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
    public function newA(Request $request, UtilisateursRepository $utilisateursRepository,UserPasswordEncoderInterface $encoder): Response
    {
        $utilisateur = new Utilisateurs();
        $form = $this->createForm(AdminType::class, $utilisateur);
        $utilisateur->setRole("admin");
        $utilisateur->setDateinscription(\DateTime::createFromFormat('d/m/Y',date('d/m/Y')));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $utilisateur->getMotdepasse();
            $encoded = $encoder->encodePassword($utilisateur, $plainPassword);
            $utilisateur->setMotdepasse($encoded);
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
    public function edit(Request $request, Utilisateurs $utilisateur, UtilisateursRepository $utilisateursRepository,UserPasswordEncoderInterface $encoder): Response
    {

            $form = $this->createForm(UtilisateursType::class, $utilisateur);

        //$utilisateur->setRole("client");
        //$utilisateur->setDateinscription(\DateTime::createFromFormat('d/m/Y',date('d/m/Y')));
        //$utilisateur->setNomadmin(null);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $utilisateur->getMotdepasse();
            $encoded = $encoder->encodePassword($utilisateur, $plainPassword);
            $utilisateur->setMotdepasse($encoded);
            $utilisateursRepository->add($utilisateur);
            return $this->redirectToRoute('app_utilisateurs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('utilisateurs/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{numeroutilisateurs}/editu", name="app_utilisateurs_editu", methods={"GET", "POST"})
     */
    public function editu(Request $request, Utilisateurs $utilisateur, UtilisateursRepository $utilisateursRepository,UserPasswordEncoderInterface $encoder): Response
    {

        $form = $this->createForm(UtilisateursType::class, $utilisateur);

        //$utilisateur->setRole("client");
        //$utilisateur->setDateinscription(\DateTime::createFromFormat('d/m/Y',date('d/m/Y')));
        //$utilisateur->setNomadmin(null);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $utilisateur->getMotdepasse();
            $encoded = $encoder->encodePassword($utilisateur, $plainPassword);
            $utilisateur->setMotdepasse($encoded);
            $utilisateursRepository->add($utilisateur);
            return $this->redirectToRoute('app_utilisateurs_profiler', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('utilisateurs/editu.html.twig', [
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
    /**
     * @Route("/", name="app_utilisateurs_index_1", methods={"post"})
     */
    public function indexRechercher(UtilisateursRepository $utilisateursRepository): Response
    {

        return $this->render('utilisateurs/index.html.twig', [
            'utilisateurs' => $utilisateursRepository->findByUsername($_POST['query']),
        ]);
    }

}
