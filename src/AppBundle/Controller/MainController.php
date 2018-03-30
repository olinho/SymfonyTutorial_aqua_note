<?php
/**
 * Created by PhpStorm.
 * User: AlekSandR
 * Date: 29.03.2018
 * Time: 15:30
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
  public function homepageAction()
  {
    return $this->render('main/homepage.html.twig');
  }
}