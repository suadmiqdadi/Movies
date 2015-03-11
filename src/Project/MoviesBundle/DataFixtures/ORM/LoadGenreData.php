<?php

# src/Project/MoviesBundle/DataFixtures/ORM/LoadGenreData.php

namespace Project\MoviesBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Project\MoviesBundle\Entity\Genre;

class LoadGenreData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $action = new Genre();
        $action->setName('Action');
		
        $adventure = new Genre();
        $adventure->setName('Adventure');
		
        $animation = new Genre();
        $animation->setName('Animation');
		
        $biography = new Genre();
        $biography->setName('Biography');
		
		$comedy = new Genre();
        $comedy->setName('Comedy');
		
		$crime = new Genre();
        $crime->setName('Crime');
		
		$drama = new Genre();
        $drama->setName('Drama');
		
		$fantasy = new Genre();
        $fantasy->setName('Fantasy');
		
		$history = new Genre();
        $history->setName('History');
		
		$horror = new Genre();
        $horror->setName('Horror');
		
		$music = new Genre();
        $music->setName('Music');
		
		$mystery = new Genre();
        $mystery->setName('Mystery');
		
		$sci_fi = new Genre();
        $sci_fi->setName('Sci-Fi');
		
		$sport = new Genre();
        $sport->setName('Sport');
		
		$thriller = new Genre();
        $thriller->setName('Thriller');
		
		$western = new Genre();
        $western->setName('Western');
		
		$em->persist($action);
        $em->persist($adventure);
		$em->persist($animation);
        $em->persist($biography);
		$em->persist($comedy);
        $em->persist($crime);
		$em->persist($drama);
        $em->persist($fantasy);
		$em->persist($history);
        $em->persist($horror);
		$em->persist($music);
        $em->persist($mystery);
		$em->persist($sci_fi);
        $em->persist($sport);
		$em->persist($thriller);
        $em->persist($western);
        $em->flush();
        $this->addReference('genre-action', $action);
        $this->addReference('genre-adventure', $adventure);
        $this->addReference('genre-animation', $animation);
        $this->addReference('genre-biography', $biography);
		$this->addReference('genre-comedy', $comedy);
        $this->addReference('genre-crime', $crime);
        $this->addReference('genre-drama', $drama);
        $this->addReference('genre-fantasy', $fantasy);
		$this->addReference('genre-history', $history);
        $this->addReference('genre-horror', $horror);
        $this->addReference('genre-music', $music);
        $this->addReference('genre-mystery', $mystery);
		$this->addReference('genre-sci_fi', $sci_fi);
        $this->addReference('genre-sport', $sport);
        $this->addReference('genre-thriller', $thriller);
        $this->addReference('genre-western', $western);
    }

    public function getOrder()
    {
        return 1;
    }
}