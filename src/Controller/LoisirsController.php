<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

#[Route('/loisirs')]
class LoisirsController extends AbstractController
{
    #[Route('/', name: 'app_loisirs', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('loisirs/index.html.twig', [
        ]);
    }
}