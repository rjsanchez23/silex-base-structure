<?php
namespace Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class HomeController
{

    public function indexAction(Request $request, Application $app)
    {
        
        return $app['twig']->render('home.html.twig');

    }

 
}
