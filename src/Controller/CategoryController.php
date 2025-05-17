<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Repository\TopicRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/category', name: 'app_category')]
class CategoryController extends AbstractController
{
    #[Route('/', name: '_index', methods: ['GET'])]
    public function index(CategoryRepository $categoryRepository): Response
    {
        return $this->render('category/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }
    
    #[Route('/{id}', name: '_show', methods: ['GET'])]
    public function show(Category $category, TopicRepository $topicRepository): Response
    {
        // Récupérer les topics associés à cette catégorie
        $topics = $topicRepository->findBy(['category' => $category], ['createdAt' => 'DESC']);
        
        return $this->render('category/show.html.twig', [
            'category' => $category,
            'topics' => $topics,
        ]);
    }
    
    // Autres méthodes existantes...
}