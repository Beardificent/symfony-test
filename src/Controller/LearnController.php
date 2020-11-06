<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class LearnController extends AbstractController
{

    private string $name = 'Unknown';
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    /**
     * @Route("/about-me")
     */
    public function aboutMe(): Response
    {
        return $this->render('learn/aboutMe.html.twig', [
            'controller_name' => 'LearnController',
            'about_me' => 'I like trains',
            'name' => $this->name
        ]);
    }

    /**
     * @Route("/")
     */
    public function showMyName(): Response
    {
        if(isset($_POST['name'])){
            $this->name = $_POST['name'];
            return $this->render('learn/nameChange.html.twig');

        }else{
            return $this->render('learn/showMyName.html.twig',
                ['name' => 'Unknown']);
        }
    }

    /**
     * @Route("/changeMyName", name="changeMyName", methods={"POST"})
     */
    public function changeMyName()
    {

        return $this->render('learn/nameChange.html.twig', ['name' => $_POST['name']]);
    }

}
