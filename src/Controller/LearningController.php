<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class LearningController
{
    /**
     * @Route("/about-me")
     */
    public function aboutMe()
    {

        return new Response('I like trains.');
    }

}
