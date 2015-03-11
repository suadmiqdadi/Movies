<?php

# src/Project/MoviesBundle/DataFixtures/ORM/LoadActorData.php

namespace Project\MoviesBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Project\MoviesBundle\Entity\Actor;

class LoadActorData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em) {
   
        $roberts = new Actor();
        $roberts->setGenre($em->merge($this->getReference('genre-thriller')));
        $roberts->setName('Julia');
        $roberts->setSurname('Roberts');
		
        $jolie = new Actor();
		$jolie->setGenre($em->merge($this->getReference('genre-biography')));
        $jolie->setName('Angelina');
        $jolie->setSurname('Jolie');
		
		$pitt = new Actor();
		$pitt->setGenre($em->merge($this->getReference('genre-action')));
        $pitt->setName('Brad');
        $pitt->setSurname('Pitt');
		
		$gere = new Actor();
		$gere->setGenre($em->merge($this->getReference('genre-drama')));
        $gere->setName('Richard');
        $gere->setSurname('Gere');
		
		$ryder = new Actor();
		$ryder->setGenre($em->merge($this->getReference('genre-drama')));
        $ryder->setName('Winona');
        $ryder->setSurname('Ryder');
		
		$carrey = new Actor();
		$carrey->setGenre($em->merge($this->getReference('genre-comedy')));
        $carrey->setName('Jim');
        $carrey->setSurname('Carrey');
		
		$em->persist($roberts);
        $em->persist($jolie);
		$em->persist($pitt);
        $em->persist($gere);
		$em->persist($ryder);
        $em->persist($carrey);
		
        $em->flush();
		
        $this->addReference('actor-roberts', $roberts);
		$this->addReference('actor-jolie', $jolie);
		$this->addReference('actor-pitt', $pitt);
		$this->addReference('actor-gere', $gere);
		$this->addReference('actor-ryder', $ryder);
		$this->addReference('actor-carrey', $carrey);
    }

    public function getOrder()
    {
        return 2;
    }
}