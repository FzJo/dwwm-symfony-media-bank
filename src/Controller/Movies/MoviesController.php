<?php

namespace App\Controller\Movies;

use App\Entity\Movie;
use App\Service\MovieListService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class MoviesController extends AbstractController
{
    /**
     * @Route("/movies", name="movies", methods={"GET", "POST"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAll(MovieListService $movieListService)
    {
        return $this->render('movies/show_all.html.twig', [
            'movies_category' => [
                'Box Office' => $movieListService->getContent($movieListService::BOX_OFFICE),
                'Trending' => $movieListService->getContent($movieListService::TRENDING)
            ],
        ]);
    }

    /**
     * @Route("/movies/{genre<action|horror|sci-fi|comedy>}", name="genre", methods={"GET", "POST"})
     */
    public function sortByGenre($genre)
    {
        return $this->render('movies/sort_by_genre.html.twig', [
            'genre' => $genre
        ]);
    }

}
