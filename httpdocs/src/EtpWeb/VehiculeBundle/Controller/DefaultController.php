<?php

namespace EtpWeb\VehiculeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EtpWebVehiculeBundle:Default:index.html.twig', array('name' => $name));
    }
    public function accueilAction()
    {
        return $this->render('EtpWebVehiculeBundle:Default:accueil.html.twig');
    }
}
