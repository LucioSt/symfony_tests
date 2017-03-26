<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setUsernameCanonical('admin');
        $userAdmin->setEmail('test@example.com');
        $userAdmin->setEmailCanonical('test@example.com');
        $userAdmin->setEnabled(1);
        $userAdmin->addRole('ROLE_ADMIN');
        $userAdmin->setPassword('$2y$13$doafkqwcj3co84wsokkckuI2dSI2hkD7NQdhzxHPUQkaECRBZ6Uwu');

        $manager->persist($userAdmin);
        $manager->flush();
    }
}

