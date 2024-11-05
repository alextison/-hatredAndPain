<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RankingsController extends AbstractController
{
    #[Route('/rankings', name: 'app_rankings')]
    public function index(): Response
    {
        return $this->render('rankings/index.html.twig', [
            'controller_name' => 'Rankings',
        ]);
    }

    #[Route('/rankings/global', name: 'app_rankings_global')]
    public function global(): Response
    {
        return $this->render('rankings/global.html.twig', [
            'controller_name' => 'Global Rankings',
        ]);
    }
}
