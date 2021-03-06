<?php

namespace DonationBundle\Repository;

/**
 * NeedsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NeedsRepository extends \Doctrine\ORM\EntityRepository
{
    public function getNeedsByCategory($category)
    {
        $qb = $this->getEntityManager()
            ->createQuery("SELECT SUM (e.value) as nb 
                            FROM DonationBundle:Needs e 
                            WHERE e.category=:n")
            ->setParameter('n', $category);
        return $qb->getResult();
    }

    public function getNeed()
    {
        $qb = $this->getEntityManager()
            ->createQuery("SELECT e 
                            FROM DonationBundle:Needs e 
                            WHERE  e.isDone = false ");
        return $qb->getResult();
    }
}
