<?php

namespace EtpWeb\CoreBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EtpWebCoreBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function accueilAction()
    {
        $name = 'World';
        return $this->render('EtpWebCoreBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function menuAction()
    {
    // On fixe en dur une liste ici, bien entendu par la suite
    // on la récupérera depuis la BDD !
    $listMenus = array(
      array('classe' => 'fa fa-dashboard fa-fw',    'chemin' => 'etpweb_core_accueil', 'title' => 'Tableau de Bord'),
      array('classe' => 'fa fa-dropbox fa-fw',      'chemin' => 'etpweb_souffrance_accueil', 'title' => 'Souffrances'),
      array('classe' => 'fa fa-edit fa-fw',         'chemin' => 'etpweb_souffrance_accueil', 'title' => 'Demandes d\'écriture'),
      array('classe' => 'fa fa-truck fa-fw',        'chemin' => 'etpweb_vehicule_accueil', 'title' => 'Véhicules'),
      array('classe' => 'fa fa-user fa-fw',         'chemin' => 'etpweb_personnel_accueil', 'title' => 'Personnel'),
      array('classe' => 'fa fa-table fa-fw',        'chemin' => 'etpweb_planning_accueil', 'title' => 'Planning'),
      array('classe' => 'fa fa-wrench fa-fw',       'chemin' => 'etpweb_core_accueil', 'title' => 'Réglages')
    );
    return $this->render('EtpWebCoreBundle:Default:menu.html.twig', array(
      // Tout l'intérêt est ici : le contrôleur passe
      // les variables nécessaires au template !
      'listMenus' => $listMenus
    ));
    }
}
