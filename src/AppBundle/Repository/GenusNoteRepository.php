<?php
/**
 * Created by PhpStorm.
 * User: AlekSandR
 * Date: 30.03.2018
 * Time: 15:08
 */

namespace AppBundle\Repository;


use AppBundle\Entity\Genus;
use Doctrine\ORM\EntityRepository;

class GenusNoteRepository extends EntityRepository
{

  public function findAllRecentNotesForGenus(Genus $genus)
  {
    return $this->createQueryBuilder('genus_note')
        ->andWhere('genus_note.genus = :genus')
        ->setParameter('genus', $genus)
        ->andWhere('genus_note.createdAt > :recentDate')
        ->setParameter('recentDate', new \DateTime('-3 months'))
        ->getQuery()
        ->execute();
  }

}