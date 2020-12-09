<?php


namespace App\DataFixtures;


use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker;

class ActorFixtures extends Fixture implements DependentFixtureInterface
{
    const ACTORS = [
        'Andrew LINCOLN',
        'Norman REEDUS',
        'Lauren COHAN',
        'Danai GURIRA',
    ];

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
        $faker = Faker\Factory::create();
        foreach (self::ACTORS as $key => $actorName) {
            $actor = new Actor();
            $actor->setName($actorName);
            $actor->addProgram($this->getReference('program_0'));
            $manager->persist($actor);
        }
        for ($i =1; $i <= 50; $i++) {
            $actors = new Actor();
            $actors->setName($faker->name);
            $actors->addProgram($this->getReference('program_'.rand(0,10)));
            $manager->persist($actors);
        }
        $manager->flush();
    }
}