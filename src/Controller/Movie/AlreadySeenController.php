<?php

namespace App\Controller\Movie;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AlreadySeenController extends AbstractController
{
    /**
     * @Route("/watched", name="watched")
     */
    public function watched()
    {
        return $this->render('already_seen/index.html.twig', [
            'controller_name' => 'AlreadySeenController',
        ]);
    }
}
