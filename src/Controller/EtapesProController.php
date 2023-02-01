<?php

namespace App\Controller;

use App\Entity\EtapesPro;
use App\Form\EtapesProType;
use App\Repository\EtapesProRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/etapes/pro')]
class EtapesProController extends AbstractController
{
    #[Route('/', name: 'app_etapes_pro_index', methods: ['GET'])]
    public function index(EtapesProRepository $etapesProRepository): Response
    {
        return $this->render('etapes_pro/index.html.twig', [
            'etapes_pros' => $etapesProRepository->findBy([], ['Year' => 'DESC']),
        ]);
    }

    #[Route('/new', name: 'app_etapes_pro_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EtapesProRepository $etapesProRepository): Response
    {
        $etapesPro = new EtapesPro();
        $form = $this->createForm(EtapesProType::class, $etapesPro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $etapesProRepository->save($etapesPro, true);

            return $this->redirectToRoute('app_etapes_pro_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('etapes_pro/new.html.twig', [
            'etapes_pro' => $etapesPro,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_etapes_pro_show', methods: ['GET'])]
    public function show(EtapesPro $etapesPro): Response
    {
        return $this->render('etapes_pro/show.html.twig', [
            'etapes_pro' => $etapesPro,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_etapes_pro_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, EtapesPro $etapesPro, EtapesProRepository $etapesProRepository): Response
    {
        $form = $this->createForm(EtapesProType::class, $etapesPro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $etapesProRepository->save($etapesPro, true);

            return $this->redirectToRoute('app_etapes_pro_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('etapes_pro/edit.html.twig', [
            'etapes_pro' => $etapesPro,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_etapes_pro_delete', methods: ['POST'])]
    public function delete(Request $request, EtapesPro $etapesPro, EtapesProRepository $etapesProRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$etapesPro->getId(), $request->request->get('_token'))) {
            $etapesProRepository->remove($etapesPro, true);
        }

        return $this->redirectToRoute('app_etapes_pro_index', [], Response::HTTP_SEE_OTHER);
    }
}
