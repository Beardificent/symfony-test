<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearnController extends AbstractController
{


    /**
     * @Route("/about-me")
     */
    public function aboutMe(): Response
    {
        return $this->render('learn/aboutMe.html.twig', [
            'controller_name' => 'LearnController',
            'about_me' => 'I like trains'
        ]);
    }

    /**
     * @Route("/")
     */
    public function showMyName(): Response
    {
        return $this->render('learn/showMyName.html.twig', [
            'name' => 'Unknown',

        ]);


    }


    public function changeMyName()
    {

    }


}
