<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $contributor = new User();
        $contributor->setFirstname('Gilles');
        $contributor->setLastame('Samuel');
        $contributor->setSurname('Gillous');
        $contributor->setEmail('contributor@wild-series.com');
        $contributor->setRoles(['ROLE_CONTRIBUTOR']);
        $contributor->setPassword($this->passwordEncoder->encodePassword(
            $contributor,
            'contributorpassword'
        ));
        $manager->persist($contributor);

        $admin = new User();
        $admin->setFirstname('Yavuz');
        $admin->setLastame('Kutuk');
        $admin->setBio('C\'est moi le plus beau et le plus fort de tous' );
        $admin->setEmail('admin@wild-series.com');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword($this->passwordEncoder->encodePassword(
            $admin,
            'adminpassword'
        ));
        $this->addReference('admin', $admin);
        $manager->persist($admin);

        $manager->flush();
    }
}
