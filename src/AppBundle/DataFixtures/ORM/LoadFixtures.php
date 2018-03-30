<?php
/**
 * Created by PhpStorm.
 * User: AlekSandR
 * Date: 29.03.2018
 * Time: 19:14
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Genus;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;

class LoadFixtures implements FixtureInterface
{

  public function load(ObjectManager $manager)
  {
    $objects = Fixtures::load(
        __DIR__.'/fixtures.yml',
        $manager,
        [
            'providers' => [$this]
        ]
        );
  }

  public function genus()
  {
    $genera = [
        'Octopus',
        'Balaena',
        'Orcinus',
        'Hippocampus',
        'Asterias',
        'Amphiprion',
        'Carcharodon',
        'Aurelia',
        'Cucumaria',
        'Balistoides',
        'Paralithodes',
        'Chelonia',
        'Trichechus',
        'Eumetopias'
    ];

    $key = array_rand($genera);

    return $genera[$key];
  }
}