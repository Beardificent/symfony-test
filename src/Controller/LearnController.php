<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class LearnController extends AbstractController
{

    private string $name;
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    /**
     * @Route("/about-becode", name="about")
     */
    public function aboutMe(): Response
    {
        $this->name = $this->session->get('name', 'Unknown');
        if($this->name == 'Unknown'){
            return $this->redirectToRoute('home');
        }else {
        return $this->render('learn/aboutMe.html.twig', [
            'about_me' => 'I like trains',
            'name' => $this->name
        ]);
        }
    }

    /**
     * @Route("/", name="home")
     */
    public function showMyName(): Response
    {
        $this->name = $this->session->get('name', 'Unknown');
        return $this->render('learn/showMyName.html.twig',
            ['name' => $this->name]);
        //OLD CODE
        /*if(isset($_POST['name'])){
            $this->name = $_POST['name'];
            return $this->render('learn/nameChange.html.twig');

        }else{
            return $this->render('learn/showMyName.html.twig',
                ['name' => 'Unknown']);
        }
        */
    }

    /**
     * @Route("/changeMyName", name="changeMyName", methods={"POST"})
     */
    public function changeMyName(SessionInterface $session)
    {
        $this->session->set('name', $_POST['name']);
        return $this->redirectToRoute('home');
    }

}
