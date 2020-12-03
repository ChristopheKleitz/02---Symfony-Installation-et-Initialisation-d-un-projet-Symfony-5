<?php


namespace App\Controller;

use App\Entity\Episode;
use App\Entity\Program;
use App\Entity\Season;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/programs", name="program_")
 */
class ProgramController extends AbstractController
{
    /**
     * Show all row from Program's Entity
     *
     * @Route("/", name="index")
     * @return Response A response instance
     */
    public function index(): Response
    {
        $programs = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findAll();

        return $this->render('program/index.html.twig',
            ['programs' => $programs]
        );
    }

    /**
     * Getting a program by id
     *
     * @Route("/show/{id<^[0-9]+$>}", methods={"GET"}, name="show")
     * @return Response
     */
    public function show(Program $program): Response
    {
        /*$program = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findOneBy(['id' => $id]);*/

        $seasons = $this->getDoctrine()
            ->getRepository(Season::class)
            ->findBy(['program' => $program]);

        if(!$program) {
            return $this->render('error.html.twig');
        }
        return $this->render('program/show.html.twig',
            ['program' => $program,
                'seasons' => $seasons
            ]);
    }

    /**
     * @Route ("/{program}/seasons/{season}", name="season_show")
     */
    public function showSeason(Program $program, Season $season): Response
    {
        /*$program = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findOneBy(['id' => $program]);*/

        $season = $this->getDoctrine()
            ->getRepository(Season::class)
            ->findOneBy(['program' => $program, 'number' => $season]);


        $episodes = $this->getDoctrine()
            ->getRepository(Episode::class)
            ->findBy(['season' => $season]);

        return $this->render('program/season_show.html.twig',
        ['program' => $program,
            'season' => $season,
            'episodes' => $episodes
        ]);
    }

    /**
     * @Route("/{program}/seasons/{season}/episode/{episode}", name="episode_show")
     */
    public function showEpisode(Program $program, Season $season, Episode $episode): Response
    {
        $season = $this->getDoctrine()
            ->getRepository(Season::class)
            ->findOneBy(['program' => $program, 'number' => $season]);

        $episodes = $this->getDoctrine()
            ->getRepository(Episode::class)
            ->findOneBy(['season' => $season, 'number' => $episode]);

        return $this->render('program/episode_show.html.twig',
            ['program' => $program,
                'season' => $season,
                'episodes' => $episodes
            ]);
    }
}