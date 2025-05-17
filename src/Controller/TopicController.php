<?php

namespace App\Controller;

use App\Entity\Topic;
use App\Form\TopicType;
use App\Repository\TopicRepository;
use App\Repository\CategoryRepository;
use App\Repository\ReplyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TopicController extends AbstractController
{
    #[Route('/topic', name: 'app_topic')]
    public function index(TopicRepository $topicRepository): Response
    {
        return $this->render('topic/index.html.twig', [
            'topics' => $topicRepository->findAll(),
        ]);
    }

    #[Route('/topic/new', name: 'app_topic_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager, CategoryRepository $categoryRepository): Response
{
    $topic = new Topic();
    
    $topic->setCreatedAt(new \DateTimeImmutable());
    $topic->setViews(0);
    $topic->setIsLocked(false);
    
    $categoryId = $request->query->get('category');
    if ($categoryId) {
        $category = $categoryRepository->find($categoryId);
        if ($category) {
            $topic->setCategory($category);
        }
    }
    
    $form = $this->createForm(TopicType::class, $topic);
    $form->handleRequest($request);
    
    if ($form->isSubmitted() && $form->isValid()) {
        $topic->setUserRelation($this->getUser());
        
        $entityManager->persist($topic);
        $entityManager->flush();
        
        $this->addFlash('success', 'Votre sujet a été créé avec succès.');
        
        return $this->redirectToRoute('app_topic_show', ['id' => $topic->getId()]);
    }
    
    return $this->render('topic/new.html.twig', [
        'form' => $form->createView(),
    ]);
}
    
    #[Route('/topic/{id}', name: 'app_topic_show', methods: ['GET'])]
    public function show(Topic $topic, ReplyRepository $replyRepository, EntityManagerInterface $entityManager): Response
    {
        $topic->setViews($topic->getViews() + 1);
        $entityManager->flush();
        
        $replies = $replyRepository->findBy(['topic' => $topic], ['createdAt' => 'ASC']);
        
        return $this->render('topic/show.html.twig', [
            'topic' => $topic,
            'replies' => $replies,
        ]);
    }
    
}