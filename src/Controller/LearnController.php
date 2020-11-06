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
    public function index(): Response
    {
        return $this->render('learn/index.html.twig', [
            'controller_name' => 'LearnController',
        ]);
    }
    /**
     * @Route("/about-me")
     */
    public function aboutMe()
    {
        return new Response('I like trains.');
    }

}
