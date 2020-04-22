<?php

namespace App\Controller\Movie;

use App\Service\MovieListService;
use App\Service\MovieService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController
{
    /**
     * @Route("/movie/{id<tt\d{7}>}", name="movie_id", methods={"GET", "POST"})
     */
    public function show($id, MovieService $movieService)
    {
        $movie = $movieService->getContent($id);
        return $this->render('movie/show.html.twig', [
            'movie' => $movie,
        ]);
    }

}
