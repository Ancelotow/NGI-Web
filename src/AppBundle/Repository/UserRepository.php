<?php

namespace AppBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{

    public function allUser()
    {
        $qb =$this->_em->createQueryBuilder();
        $qb->select('u')
            ->from('AppBundle:User', 'u')
            ->orderby('u.username');
        $query = $qb->getQuery();
        $result = $query->getResult();
        return $result;
    }

}
