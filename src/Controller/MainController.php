<?php

namespace App\Controller;

//use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/change-locale/{locale}", name="change-locale")
     */
    public function changeLocale ( $locale, Request $request )
    {
        //on stocke la langue demande dans la session
        $request->getSession()->set('_locale',$locale);
        $request->setLocale($locale);
        // on revient sur la page precedente
        return  $this->redirect($request->headers->get('referer'));


    }
}
