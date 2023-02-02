<?php

namespace App\Controller;

use App\Entity\EtapesPro;
use App\Repository\EtapesProRepository;
use App\Repository\FormationRepository;
use App\Repository\SkillsRepository;
use App\Repository\StageRepository;
use App\Repository\StepRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class Mainpage extends AbstractController

{
    #[Route('/main/', name: 'main')]
    public function index(EtapesProRepository $etapesProRepository, FormationRepository $formationRepository,SkillsRepository $skillsRepository,StageRepository $stagesRepository,StepRepository $stepsRepository): Response

    {
        $EtapesPro=$etapesProRepository->findBy([], ['Year' => 'DESC']);
        $Formations=$formationRepository->findBy([], ['Date' => 'DESC']);
        $Skills=$skillsRepository->findAll();
        $Stages=$stagesRepository->findBy([], ['Year_begin' => 'DESC']);
        $Steps=$stepsRepository->findBy([], ['Year_begin' => 'DESC'], ['Month_begin' => 'DESC']) ;
//var_dump($Steps);
//die();
        return $this->render('mainpage/main.html.twig', [

            'etapespro' => $EtapesPro,
            'formations' => $Formations,
            'skills' => $Skills,
            'stages' => $Stages,
            'steps' => $Steps,
        ]);
    }

}