<?php

namespace Gemuni\OAuth2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GemuniOAuth2Bundle:Default:index.html.twig', array('name' => $name));
    }
}
