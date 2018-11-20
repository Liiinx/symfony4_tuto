<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/", name="home")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function home()
    {

        return $this->render('blog/home.html.twig', ['title']);
    }

    /**
     * @Route("/blog/12", name="blog_show")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function show()
    {
        return $this->render('blog/show.html.twig');
    }
}
