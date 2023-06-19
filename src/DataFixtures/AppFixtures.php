<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\UserFactory;
use App\Factory\StudentFactory;
use App\Factory\ModuleFactory;
use App\Factory\QuizFactory;
use App\Factory\QuizmarkFactory;
use App\Factory\RessourcesFactory;
use App\Factory\SubjectFactory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        UserFactory::createMany(1);
        StudentFactory::createMany(1);
        ModuleFactory::createMany(1);
        QuizFactory::createMany(1);
        QuizmarkFactory::createMany(1);
        RessourcesFactory::createMany(1);
        SubjectFactory::createMany(1);
        
        $manager->flush();
    }
}
