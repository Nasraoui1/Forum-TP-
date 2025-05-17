<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\CategoryRepository;
use App\Repository\LanguageRepository;
use App\Repository\ReplyRepository;
use App\Repository\TopicRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'app_admin_dashboard')]
    public function index(
        UserRepository $userRepository,
        TopicRepository $topicRepository,
        ReplyRepository $replyRepository,
        CategoryRepository $categoryRepository,
        LanguageRepository $languageRepository
    ): Response
    {
        $stats = [
            'users' => count($userRepository->findAll()),
            'topics' => count($topicRepository->findAll()),
            'replies' => count($replyRepository->findAll()),
            'categories' => count($categoryRepository->findAll()),
            'languages' => count($languageRepository->findAll()),
        ];

        return $this->render('admin/index.html.twig', [
            'stats' => $stats,
            'users' => $userRepository->findAll(),
        ]);
    }

    #[Route('/users/{id}/toggle-role', name: 'app_admin_toggle_role')]
    public function toggleRole(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        $role = $request->query->get('role');
        $roles = $user->getRoles();

        if (in_array($role, ['ROLE_USER', 'ROLE_ADMIN', 'ROLE_BANNED'])) {
            $roles = array_filter($roles, function($r) {
                return $r !== 'ROLE_ADMIN' && $r !== 'ROLE_BANNED';
            });

            if ($role !== 'ROLE_USER') {
                $roles[] = $role;
            }

            $user->setRoles($roles);
            $entityManager->flush();

            $this->addFlash('success', 'Le rôle de l\'utilisateur a été mis à jour');
        }

        return $this->redirectToRoute('app_admin_dashboard');
    }
}