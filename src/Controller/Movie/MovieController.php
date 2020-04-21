<?php

namespace App\Controller\Movie;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController
{
    /**
     * @Route("/movie/{id<tt\d{7}>}", name="movie_id", methods={"GET", "POST"})
     */
    public function show($id)
    {
        var_dump($id);
        return $this->render('movie/show.html.twig', [
            'controller_name' => 'MovieController',
        ]);
    }
}
