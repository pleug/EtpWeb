<?php

namespace EtpWeb\PersonnelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EtpWebPersonnelBundle:Default:index.html.twig', array('name' => $name));
    }
    public function accueilAction()
    {
        return $this->render('EtpWebPersonnelBundle:Default:accueil.html.twig');
    }
}
