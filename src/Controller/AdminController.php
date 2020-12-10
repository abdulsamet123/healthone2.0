<?php
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/" , name="homepage")
     */
    public function homepageAction(){
        // return new Response("<h1>Welkom</h1>");
         return $this->render('admin/homepage.html.twig');
    }
}
