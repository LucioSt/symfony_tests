<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Contacts;

class LoadContactData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new Contacts();
        $userAdmin->setName('Lucio Stocco');
        $userAdmin->setAddress('15, Park Terrace');
        $userAdmin->setCountry('Ireland');
        $userAdmin->setCity('Dublin');
        $userAdmin->setCategory(0);
        $userAdmin->setDatetime(new \DateTime('now'));

        $manager->persist($userAdmin);
        $manager->flush();


        $userAdmin = new Contacts();
        $userAdmin->setName('José Marques');
        $userAdmin->setAddress('23, St. Patric');
        $userAdmin->setCountry('Ireland');
        $userAdmin->setCity('Dublin');
        $userAdmin->setCategory(0);
        $userAdmin->setDatetime(new \DateTime('now'));

        $manager->persist($userAdmin);
        $manager->flush();
    }
}

