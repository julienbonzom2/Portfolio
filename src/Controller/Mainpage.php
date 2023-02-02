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
use Doctrine\ORM\QueryBuilder;


class Mainpage extends AbstractController

{
    #[Route('/main/', name: 'main')]
    public function index(EtapesProRepository $etapesProRepository, FormationRepository $formationRepository,SkillsRepository $skillsRepository,StageRepository $stagesRepository,StepRepository $stepsRepository): Response

    {
        $EtapesPro=$etapesProRepository->findBy([], ['Year' => 'DESC']);
        $Formations=$formationRepository->findBy([], ['Date' => 'DESC']);
        $Skills=$skillsRepository->findAll();
        $Stages=$stagesRepository->findBy([], ['Year_begin' => 'DESC']);
        $Steps=$stepsRepository->findBy([], ['Year_begin' => 'DESC']);


        return $this->render('mainpage/main.html.twig', [

            'etapespro' => $EtapesPro,
            'formations' => $Formations,
            'skills' => $Skills,
            'stages' => $Stages,
            'steps' => $Steps,
        ]);
    }
    #[Route('/pdf/', name: 'pdf')]
    public function visualiserdocument() {
        $projectRoot = $this->getParameter('kernel.project_dir');
        $filename = "CV-J_BONZOM.pdf";
        return $this->file( $projectRoot.'/public/documents/'.$filename );
    }
}