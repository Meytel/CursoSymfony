<?php
/**
 * Created by PhpStorm.
 * User: v.coronado
 * Date: 4/06/14
 * Time: 17:33
 */

namespace Acme\PortfolioBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class HomeController extends Controller
{
    public function indexAction()
    {
        //return new Response('<h1>Home</h1>');
        return $this->render(
            'AcmePortfolioBundle:Home:index.html.twig'
        );
    }

    public function aboutAction()
    {
        //return new Response('<h1>About</h1>');
        return $this->render(
            'AcmePortfolioBundle:Home:about.html.twig'
        );
    }

} 