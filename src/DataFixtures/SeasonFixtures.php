<?php


namespace App\DataFixtures;


use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{

    /**
     * @inheritDoc
     */
    public function getDependencies()
    {
        return [ProgramFixtures::class];
    }

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        for ( $i = 0; $i <= 10; $i++) {

            for ($j = 1; $j <= 15; $j++) {
                $season = new Season();
                $season->setNumber($j);
                $this->addReference('program_'.$i.'season_'.$j, $season);
                $season->setProgram($this->getReference('program_'.$i));
                $season->setYear(2020);
                $season->setDescription($faker->text);
                $manager->persist($season);
            }

        }
        $manager->flush();
    }
}