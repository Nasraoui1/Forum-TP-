<?php

namespace App\DataFixtures;

use App\Entity\Language;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LanguageFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $languages = [
            ['name' => 'Français', 'code' => 'fr', 'isActive' => true],
            ['name' => 'English', 'code' => 'en', 'isActive' => true],
            ['name' => 'Español', 'code' => 'es', 'isActive' => true],
            ['name' => 'Deutsch', 'code' => 'de', 'isActive' => false],
        ];

        foreach ($languages as $index => $langData) {
            $language = new Language();
            $language->setName($langData['name']);
            $language->setCode($langData['code']);
            $language->setIsActive($langData['isActive']);
            
            $manager->persist($language);
            $this->addReference('language_' . $langData['code'], $language);
        }

        $manager->flush();
    }
}