// src/Project/MoviesBundle/Controller/IndexController.php
namespace Project\MoviesBundle\Controller;

class IndexController
{
public function indexAction($id)
    {
        return $this->render(
            'ProjectMoviesBundle:Info:index.html.twig',
            array()
			);
    }
}