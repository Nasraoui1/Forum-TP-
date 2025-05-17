<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        // Créer un admin
        $admin = new User();
        $admin->setEmail('admin@forum.com');
        $admin->setFirstName('Admin');
        $admin->setLastName('User');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setIsActive(true);
        $admin->setCreatedAt(new \DateTimeImmutable());
        $password = $this->hasher->hashPassword($admin, 'admin123');
        $admin->setPassword($password);
        $manager->persist($admin);
        $this->addReference('user_admin', $admin);

        // Créer un utilisateur normal
        $user = new User();
        $user->setEmail('user@forum.com');
        $user->setFirstName('Regular');
        $user->setLastName('User');
        $user->setRoles(['ROLE_USER']);
        $user->setIsActive(true);
        $user->setCreatedAt(new \DateTimeImmutable());
        $password = $this->hasher->hashPassword($user, 'user123');
        $user->setPassword($password);
        $manager->persist($user);
        $this->addReference('user_regular', $user);

        // Créer un utilisateur banni
        $banned = new User();
        $banned->setEmail('banned@forum.com');
        $banned->setFirstName('Banned');
        $banned->setLastName('User');
        $banned->setRoles(['ROLE_BANNED']);
        $banned->setIsActive(false);
        $banned->setCreatedAt(new \DateTimeImmutable());
        $password = $this->hasher->hashPassword($banned, 'banned123');
        $banned->setPassword($password);
        $manager->persist($banned);
        $this->addReference('user_banned', $banned);

        $manager->flush();
    }
}