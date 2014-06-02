<?php

namespace Application;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Application\Entity\User;

class LoadUser implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setName('Ila Best')
            ->setEmail('feugiat.nec@Lorem.org');
        $manager->persist($user1);

        $user2 = new User();
        $user2->setName('Honorato Navarro')
            ->setEmail('nunc.interdum@adipiscing.org');
        $manager->persist($user2);

        $user3 = new User();
        $user3->setName('Reuben Ross')
            ->setEmail('nunc.interdum@adipiscing.org');
        $manager->persist($user3);

        $user4 = new User();
        $user4->setName('Buckminster Patel')
            ->setEmail('lobortis@euultricessit.com');
        $manager->persist($user4);

        $user5 = new User();
        $user5->setName('Kaitlin Pearson')
            ->setEmail('pede.sagittis@orciPhasellusdapibus.edu');
        $manager->persist($user5);

        $user6 = new User();
        $user6->setName('Devin Carson')
            ->setEmail('enim.nec@fringilla.co.uk');
        $manager->persist($user6);

        $user7 = new User();
        $user7->setName('Peter James')
            ->setEmail('non.nisi.Aenean@egestas.ca');
        $manager->persist($user7);

        $user8 = new User();
        $user8->setName('Carol Burgess')
            ->setEmail('ornare.tortor@idante.co.uk');
        $manager->persist($user8);

        $user9 = new User();
        $user9->setName('Walter Mccormick')
            ->setEmail('urna@urnaNuncquis.net');
        $manager->persist($user9);

        $user10 = new User();
        $user10->setName('Stuart Grant')
            ->setEmail('velit.Cras.lorem@habitantmorbi.com');
        $manager->persist($user10);

        $manager->flush();
    }
}