<?php


namespace App\DataFixtures;


use App\Entity\Episode;
use App\Service\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    private $slug;

    public function __construct(Slugify $slugify)
    {
        $this->slug = $slugify;
    }

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
        $slugify = new Slugify();
        for ($i = 0; $i <= 10; $i++) {
            for ($j = 1; $j <=8; $j++) {
                for ($k=1; $k <= 12; $k++) {
                    $episode = new Episode();
                    $episode->setSeason($this->getReference('program_'.$i.'season_'.$j));
                    $episode->setTitle($faker->sentence);
                    $episode->setNumber($k);
                    $episode->setSynopsis($faker->text);
                    $slug = $slugify->generate($episode->getTitle());
                    $episode->setSlug($slug);
                    $manager->persist($episode);
                }
            }
        }
        $manager->flush();
    }
}