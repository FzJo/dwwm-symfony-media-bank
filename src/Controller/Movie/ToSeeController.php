<?php

namespace App\Controller\Movie;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ToSeeController extends AbstractController
{
    /**
     * @Route("/toSee", name="to_see")
     */
    public function index()
    {
        return $this->render('to_see/index.html.twig', [
            'controller_name' => 'ToSeeController',
        ]);
    }
}
