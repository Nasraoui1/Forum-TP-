<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categories = [
            ['name' => 'Général', 'description' => 'Discussions générales sur tous les sujets'],
            ['name' => 'Technologie', 'description' => 'Discussions sur la technologie, les gadgets et l\'informatique'],
            ['name' => 'Jeux vidéo', 'description' => 'Discussions sur les jeux vidéo et consoles'],
            ['name' => 'Cinéma', 'description' => 'Discussions sur les films et séries TV'],
            ['name' => 'Musique', 'description' => 'Discussions sur la musique et les artistes'],
        ];

        foreach ($categories as $index => $catData) {
            $category = new Category();
            $category->setName($catData['name']);
            $category->setDescription($catData['description']);
            $category->setCreatedAt(new \DateTimeImmutable());
            
            $manager->persist($category);
            $this->addReference('category_' . $index, $category);
        }

        $manager->flush();
    }
}