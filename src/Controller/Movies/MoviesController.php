<?php

namespace App\Controller\Movies;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    /**
     * @Route("/movies", name="movies", methods={"GET", "POST"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAll()
    {
        return $this->render('movies/show_all.html.twig', [
            'controller_name' => 'MoviesController',
        ]);
    }
    /**
     * @Route("/movies/{genre<action|horror|sci-fi|comedy>}", name="genre", methods={"GET", "POST"})
     */
    public function sortByGenre($genre)
    {
        var_dump($genre);
        return $this->render('movies/genre.html.twig', [
            'controller_name' => 'MoviesController',
        ]);
    }

}
