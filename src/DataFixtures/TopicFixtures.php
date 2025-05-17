<?php

namespace App\DataFixtures;

use App\Entity\Topic;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class TopicFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $topics = [
            [
                'title' => 'Bienvenue sur le forum',
                'content' => 'Bienvenue sur notre forum. Présentez-vous ici!',
                'category' => 'category_0',
                'user' => 'user_admin',
                'language' => 'language_fr',
                'isLocked' => false,
                'views' => 150
            ],
            [
                'title' => 'Les dernières tendances technologiques',
                'content' => 'Quelles sont les technologies qui vous intéressent actuellement?',
                'category' => 'category_1',
                'user' => 'user_regular',
                'language' => 'language_fr',
                'isLocked' => false,
                'views' => 75
            ],
            [
                'title' => 'Best video games of 2023',
                'content' => 'What are your favorite games released this year?',
                'category' => 'category_2',
                'user' => 'user_regular',
                'language' => 'language_en',
                'isLocked' => false,
                'views' => 120
            ],
            [
                'title' => 'Film recommendations',
                'content' => 'Looking for good movies to watch this weekend!',
                'category' => 'category_3',
                'user' => 'user_admin',
                'language' => 'language_en',
                'isLocked' => false,
                'views' => 65
            ],
            [
                'title' => 'Sujet verrouillé',
                'content' => 'Ce sujet a été verrouillé par un administrateur.',
                'category' => 'category_0',
                'user' => 'user_banned',
                'language' => 'language_fr',
                'isLocked' => true,
                'views' => 30
            ],
        ];

        foreach ($topics as $index => $topicData) {
            $topic = new Topic();
            $topic->setTitle($topicData['title']);
            $topic->setContent($topicData['content']);
            $topic->setCategory($this->getReference($topicData['category']));
            $topic->setUserRelation($this->getReference($topicData['user']));
            $topic->setIsLocked($topicData['isLocked']);
            $topic->setViews($topicData['views']);
            $topic->setCreatedAt(new \DateTimeImmutable());
            
            $manager->persist($topic);
            $this->addReference('topic_' . $index, $topic);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class,
            CategoryFixtures::class,
            LanguageFixtures::class,
        ];
    }
}