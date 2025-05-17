<?php

namespace App\DataFixtures;

use App\Entity\Reply;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ReplyFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $replies = [
            [
                'content' => 'Merci pour ce sujet de bienvenue!',
                'user' => 'user_regular',
                'topic' => 'topic_0',
                'isApproved' => true
            ],
            [
                'content' => 'Je m\'intéresse beaucoup à l\'intelligence artificielle ces derniers temps.',
                'user' => 'user_admin',
                'topic' => 'topic_1',
                'isApproved' => true
            ],
            [
                'content' => 'I really enjoyed playing Baldur\'s Gate 3!',
                'user' => 'user_admin',
                'topic' => 'topic_2',
                'isApproved' => true
            ],
            [
                'content' => 'I would recommend watching Oppenheimer.',
                'user' => 'user_regular',
                'topic' => 'topic_3',
                'isApproved' => true
            ],
            [
                'content' => 'Cette réponse est en attente de modération.',
                'user' => 'user_banned',
                'topic' => 'topic_1',
                'isApproved' => false
            ],
        ];

        foreach ($replies as $index => $replyData) {
            $reply = new Reply();
            $reply->setContent($replyData['content']);
            $reply->setUserRelation($this->getReference($replyData['user']));
            $reply->setTopic($this->getReference($replyData['topic']));
            $reply->setIsApproved($replyData['isApproved']);
            $reply->setCreatedAt(new \DateTimeImmutable());
            
            $manager->persist($reply);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class,
            TopicFixtures::class,
        ];
    }
}