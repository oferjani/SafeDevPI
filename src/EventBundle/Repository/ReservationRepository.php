<?php

namespace EventBundle\Repository;

/**
 * ReservationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReservationRepository extends \Doctrine\ORM\EntityRepository
{
    public function countBen()
    {
        $query = $this->getEntityManager()->createQuery("Select count(v) as c , v.location  FROM RefugeeBundle:Benevole v
      group by v.location");
    }

    public function countRes($iduser , $idevent)
    {
        $query = $this->getEntityManager()->createQuery("Select count(e) as nbr  FROM EventBundle:Reservation e
      where e.idUser=:i and e.idEvent=:g")->setParameter('i',$iduser)->setParameter('g',$idevent);

      return  $query->getResult();
    }

}
