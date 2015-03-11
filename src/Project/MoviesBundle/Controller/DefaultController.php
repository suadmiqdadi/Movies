<?php

namespace Project\MoviesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjectMoviesBundle:Default:index.html.twig', array());
    }
}
