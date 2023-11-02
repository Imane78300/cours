<?php

namespace App\DataFixtures;

use App\Entity\User;
use Faker;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;



class UserFixtures extends Fixture
// fixture = jeux de donné
{

    private UserPasswordHasherInterface $hasher;

    public const ADMIN_USER_REFERENCE = 'admin-user';

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }




    public function load(ObjectManager $manager): void
    {

        $faker = Faker\Factory::create("fr_FR");
        for ($i = 0; $i < 20; $i++) {
            $user = new User();


            $user->setFirstname($faker->firstName);
            $user->setLastname($faker->lastName);
            $user->setEmail($faker->email);
            $user->setNum($faker->phoneNumber);
          





            // $user->setLastname('Assia');
            // $user->setEmail("test_$i@test.fr");

            
            $password = $this->hasher->hashPassword($user, 'test123');
            $user->setPassword($password);


            // $user->setPassword('test123');
         
            $manager->persist($user);
        }




        $manager->flush();

        $this->addReference(self::ADMIN_USER_REFERENCE, $user);
    }
}
