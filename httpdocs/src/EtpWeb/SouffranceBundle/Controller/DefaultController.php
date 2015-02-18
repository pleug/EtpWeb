<?php

namespace EtpWeb\SouffranceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EtpWebSouffranceBundle:Default:index.html.twig', array('name' => $name));
    }
    public function accueilAction()
    {
        return $this->render('EtpWebSouffranceBundle:Default:accueil.html.twig');
    }
}
