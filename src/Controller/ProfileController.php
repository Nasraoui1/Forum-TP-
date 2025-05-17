<?php

namespace App\Controller;

use App\Form\ProfileType;
use App\Repository\ReplyRepository;
use App\Repository\TopicRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/profile')]
class ProfileController extends AbstractController
{
    #[Route('/', name: 'app_profile_index')]
    public function index(TopicRepository $topicRepository, ReplyRepository $replyRepository): Response
    {
        $user = $this->getUser();
        
        if (!$user) {
            throw new AccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }

        // Utilisez userRelation au lieu de user dans la requête
        $topics = $topicRepository->findBy(['userRelation' => $user], ['createdAt' => 'DESC']);
        $replies = $replyRepository->findBy(['userRelation' => $user], ['createdAt' => 'DESC']);

        return $this->render('profile/index.html.twig', [
            'user' => $user,
            'topics' => $topics,
            'replies' => $replies,
        ]);
    }

    #[Route('/edit', name: 'app_profile_edit')]
    public function edit(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        
        if (!$user) {
            throw new AccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }

        $form = $this->createForm(ProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Votre profil a été mis à jour avec succès.');

            return $this->redirectToRoute('app_profile_index');
        }

        return $this->render('profile/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
}