<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgramController extends AbstractController
{
    /**
     * @Route("/programs/", name="program_index")
     */
    public function index(): Response
    {
        return $this->render('program/index.html.twig', ['website' => 'Wild Series']);
    }

    /**
     * @Route("/actors/", name="actor_index")
     */
    public function actors(): Response
    {
        return $this->render('program/actors.html.twig', ['website' => 'Wild Series']);
    }
}