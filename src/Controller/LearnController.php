<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearnController extends AbstractController
{

    private string $name;

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
        if(isset($_POST['name'])){
            $this->name = $_POST['name'];
        }else{
            $this->name = 'Unknown';
        }

        return $this->render('learn/showMyName.html.twig', [
            'name' => $this->name,

        ]);


    }


    public function changeMyName()
    {

    }


}
