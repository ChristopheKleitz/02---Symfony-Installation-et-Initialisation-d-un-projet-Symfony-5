<?php


namespace App\DataFixtures;


use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    const CATEGORIES = [
        'Action',
        'Animation',
        'Aventure',
        'Biopic',
        'Classique',
        'Comédie',
        'Comédie dramatique',
        'Dessin Animé',
        'Drame',
        'Horreur',
        'Fantastique',
        'Historique',
        'Judiciaire',
        'Médical',
        'Policier',
        'Romance',
        'Science Fiction'
    ];

    public function load(ObjectManager $manager)
    {
        foreach (self::CATEGORIES as $key => $categoryName) {
            $category = new Category();
            $category->setName($categoryName);
            $manager->persist($category);
            $this->addReference($categoryName, $category);
        }
        $manager->flush();
    }
}