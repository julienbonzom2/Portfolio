<?php

namespace App\Controller;

use App\Entity\Commentaires;
use App\Form\CommentairesType;
use App\Repository\CommentairesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/commentaires')]
class CommentairesController extends AbstractController
{
    #[Route('/index', name: 'app_commentaires_index', methods: ['GET'])]
    public function index(CommentairesRepository $commentairesRepository): Response
    {
        return $this->render('commentaires/index.html.twig', [
            'commentaires' => $commentairesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_commentaires_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CommentairesRepository $commentairesRepository): Response
    {
        $commentaire = new Commentaires();
        $form = $this->createForm(CommentairesType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentairesRepository->save($commentaire, true);
            $this->addFlash('success', 'Message bien reçu');
            return $this->redirectToRoute('main', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commentaires/new.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form,
        ]);
    }


}
