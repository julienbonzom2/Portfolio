<?php
// src/Controller/SecurityController.php
namespace App\Controller;

use App\Repository\EtapesProRepository;
use App\Repository\FormationRepository;
use App\Repository\SkillsRepository;
use App\Repository\StageRepository;
use App\Repository\StepRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
class SecurityController extends AbstractController
{
    #[Route('/logout', name: 'app_logout', methods: ['GET'])]
    public function logout(EtapesProRepository $etapesProRepository, FormationRepository $formationRepository,SkillsRepository $skillsRepository,StageRepository $stagesRepository,StepRepository $stepsRepository):response
    {
        // controller can be blank: it will never be called!


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
}