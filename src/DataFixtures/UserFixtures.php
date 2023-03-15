<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

class UserFixtures extends Fixture
{
    public function __construct(
        private readonly UserPasswordHasherInterface $passwordEncoder
    )
    {

    }

    public function load(ObjectManager $manager)
    {
        $user = new Users();
        $user->setName('Michał');
        $user->setLastname('Jaywooz');
        $user->setRoles(['ROLE_USER']);
        $user->setIndexNumber('694201');
        $user->setPassword($this->passwordEncoder->hashPassword($user, 'password'));
        $manager->persist($user);
        $manager->flush();
    }
}