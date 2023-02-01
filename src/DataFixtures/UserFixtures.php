<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;


    public function __construct(UserPasswordHasherInterface $passwordHasher)

    {

        $this->passwordHasher = $passwordHasher;

    }


    public function load(ObjectManager $manager): void

    {


        // Création d’un utilisateur de type “administrateur”

        $admin = new User();

        $admin->setUsername('Joffo');

        $admin->setRoles(['ROLE_ADMIN']);
        $password='Leysin1969$';
        $hashedPassword = $this->passwordHasher->hashPassword(

            $admin,
            $password

        );

        $admin->setPassword($hashedPassword);
        $manager->persist($admin);


        // Sauvegarde dU nouveaux utilisateurs :

        $manager->flush();

    }
}
