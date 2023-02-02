<?php

namespace App\Controller;

use App\Repository\EtapesProRepository;
use App\Repository\FormationRepository;
use App\Repository\SkillsRepository;
use App\Repository\StageRepository;
use App\Repository\StepRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/avis', name: 'avis')]
class AvisController  extends AbstractController
{
    #[Route('/', name: 'app_avis')]
    public function avis(): Response

    {

    return $this->render('avis/avis.html.twig');

    }
}