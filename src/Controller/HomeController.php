<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\TopicRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CategoryRepository $categoryRepository, TopicRepository $topicRepository): Response
    {
        $categories = $categoryRepository->findAll();
        $latestTopics = $topicRepository->findBy([], ['createdAt' => 'DESC'], 5);

        return $this->render('home/index.html.twig', [
            'categories' => $categories,
            'latestTopics' => $latestTopics,
        ]);
    }
}