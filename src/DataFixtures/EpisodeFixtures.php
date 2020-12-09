<?php


namespace App\DataFixtures;


use App\Entity\Episode;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{

    /**
     * @inheritDoc
     */
    public function getDependencies()
    {
        return [SeasonFixtures::class];
    }

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i = 0; $i <= 10; $i++) {
            for ($j = 1; $j <=15; $j++) {
                for ($k=1; $k <= 20; $k++) {
                    $episode = new Episode();
                    $episode->setSeason($this->getReference('program_'.$i.'season_'.$j));
                    $episode->setTitle($faker->sentence);
                    $episode->setNumber($k);
                    $episode->setSynopsis($faker->text);
                    $manager->persist($episode);
                }
            }
        }
        $manager->flush();
    }
}