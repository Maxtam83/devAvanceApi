<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $product = new User();
         $product->setEmail('TEST@EMAIL.COM ');
         $manager->persist($product);

        $manager->flush();
    }
}
