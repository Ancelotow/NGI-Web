<?php

namespace NG\GestionnaireBundle\Repository;

/**
 * AGRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AGRepository extends \Doctrine\ORM\EntityRepository
{

    public function lesAgs($copro)
    {
        $qb =$this->_em->createQueryBuilder();
        $qb->select('a')
            ->from('NGGestionnaireBundle:AG', 'a')
            ->where('a.copro = :copro')
            ->setParameter('copro', $copro);
        $query = $qb->getQuery();
        $resultat = $query->getResult();
        return $resultat;
    }

}