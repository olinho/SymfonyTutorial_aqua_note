<?php
/**
 * Created by PhpStorm.
 * User: AlekSandR
 * Date: 29.03.2018
 * Time: 15:36
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class CarsController extends Controller
{
//  public function listCarsAction()
//  {
//    return $this->render('cars/show.html.twig');
//  }

  /**
   * @Route("/cars/show")
   */
  public function showAction()
  {
    return $this->render('cars/show.html.twig',[
        'actionName' => 'showCars'
    ]);
  }

  /**
   * @Route("/cars/show_all_cars", name="cars_show_cars")
   */
  public function getCarsAction()
  {
    $cars = [
        ['id' => 1, 'carName' => 'BMW', 'color' => 'red'],
        ['id' => 2, 'carName' => 'BMW', 'color' => 'green'],
        ['id' => 3, 'carName' => 'BMW', 'color' => 'blue'],
    ];

    $data = [
        'cars' => $cars,
    ];

    return new JsonResponse($data);
  }
}