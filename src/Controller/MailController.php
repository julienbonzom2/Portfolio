<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use App\Entity\Mail;
use App\Repository\MailRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\MailType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/mail', name: 'mail')]

class MailController extends AbstractController
{
    #[Route('/index', name: 'index')]

    public function index(MailRepository $MailRepository): Response

    {
        $mails = $MailRepository->findAll();
// return render twig
        return $this->render('mail/index.html.twig', ['mails' => $mails]);
    }
     #[Route('/new', name: 'new_mail')]

    public function mail(Request $request, MailRepository $mailRepository): Response

    {

        $mail = new Mail();


        // Create the form, linked with $category

        $form = $this->createForm(MailType::class, $mail);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $mailRepository->save($mail, true);
            //return $this->redirectToRoute('mail_index');

        }
        return $this->renderForm('mail/mail.html.twig', [
            'form' => $form,

        ]);


    }
}