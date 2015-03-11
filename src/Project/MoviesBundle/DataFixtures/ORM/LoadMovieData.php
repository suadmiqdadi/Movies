<?php

# src/Project/MoviesBundle/DataFixtures/ORM/LoadMovieData.php

namespace Project\MoviesBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Project\MoviesBundle\Entity\Movie;

class LoadMovieData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em) {
   
        $enemy = new Movie();
		$enemy->setTitle('Sleeping with the Enemy');
		$enemy->setDescription('A young woman fakes her own death in an attempt to escape her nightmarish marriage, but discovers it is impossible to elude her controlling husband.');
        $enemy->setGenre($em->merge($this->getReference('genre-thriller')));
		#$enemy->setCover();
        $enemy->setPrice(10);
		$enemy->setActor($em->merge($this->getReference('actor-roberts')));
		$enemy->setReleaseDate('1991');
		
		$gia = new Movie();
		$gia->setTitle('Gia');
		$gia->setDescription('The story of the life of Gia Carangi, a top fashion model from the late 1970s, from her meteoric rise to the forefront of the modeling industry, to her untimely death from AIDS at age 26.');
        $gia->setGenre($em->merge($this->getReference('genre-biography')));
		#$gia->setCover();
        $gia->setPrice(10);
		$gia->setActor($em->merge($this->getReference('actor-jolie')));
		$gia->setReleaseDate('1998');
		
		$smith = new Movie();
		$smith->setTitle('Mr and Ms Smith');
		$smith->setDescription('A bored married couple is surprised to learn that they are both assassins hired by competing agencies to kill each other.');
        $smith->setGenre($em->merge($this->getReference('genre-action')));
		#$smith->setCover();
        $smith->setPrice(10);
		$smith->setActor($em->merge($this->getReference('actor-pitt')));
		$smith->setReleaseDate('2004');

	    $autumn = new Movie();
		$autumn->setTitle('Autumn in New York');
		$autumn->setDescription('Romantic drama about an aging playboy who falls for a sweet, but terminally ill, young woman.');
        $autumn->setGenre($em->merge($this->getReference('genre-drama')));
		#$autumn->setCover();
        $autumn->setPrice(10);
		$autumn->setActor($em->merge($this->getReference('actor-gere')));
		$autumn->setReleaseDate('2000');

		$edward = new Movie();
		$edward->setTitle('Edwad Scissorhands');
		$edward->setDescription('An uncommonly gentle young man, who happens to have scissors for hands, falls in love with a beautiful girl.');
        $edward->setGenre($em->merge($this->getReference('genre-fantasy')));
		#$edward->setCover();
        $edward->setPrice(10);
		$edward->setActor($em->merge($this->getReference('actor-ryder')));
		$edward->setReleaseDate('1990');
		
		$dumb = new Movie();
		$dumb->setTitle('Dumb and Dumber');
		$dumb->setDescription('The cross-country adventures of two good-hearted but incredibly stupid friends.');
        $dumb->setGenre($em->merge($this->getReference('genre-comedy')));
		#$dumb->setCover();
        $dumb->setPrice(10);
		$dumb->setActor($em->merge($this->getReference('actor-carrey')));
		$dumb->setReleaseDate('1994');
		
		$em->persist($enemy);
        $em->persist($gia);
		$em->persist($smith);
        $em->persist($autumn);
		$em->persist($edward);
        $em->persist($dumb);
        $em->flush();
        
    }

    public function getOrder()
    {
        return 3;
    }
}