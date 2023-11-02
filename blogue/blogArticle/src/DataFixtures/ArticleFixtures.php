<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\Article;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;


use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;



class ArticleFixtures extends Fixture implements DependentFixtureInterface 
// fixture = jeux de donné
{




    public function load(ObjectManager $manager): void
    {

        $faker = Faker\Factory::create("fr_FR");
        for ($i = 0; $i < 20; $i++) {
            
         $article = new Article();

            $article->setTitre($faker->realText($maxNbChars = 20 ));
            // $article->setTitre($faker->sentence($nbWords = 6,$variableNbWords = true));


            $article->setResume($faker->realtext($maxNbChars = 200,$indexSize = 1 ));
            $article->setContenue($faker->realtext($maxNbChars = 100));
            $article->setImage("homer.jpg");
            $article->setCreatedAt(new \DateTimeImmutable());
 
            $article->setUser($this->getReference(UserFixtures::ADMIN_USER_REFERENCE));

            $manager->persist($article);

        }

        $manager->flush();
    }

     public function getDependencies()
    {
        return [
            UserFixtures::class,
        ];
    }
}
