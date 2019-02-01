<?php

namespace NG\GestionnaireBundle\Repository;

/**
 * HabitantRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class HabitantRepository extends \Doctrine\ORM\EntityRepository
{

    public function lesHabs($code)
    {
        $qb =$this->_em->createQueryBuilder();
        $qb->select('h')
            ->from('NGGestionnaireBundle:Habitant', 'h')
            ->innerJoin('NGGestionnaireBundle:Lot', 'l')
            ->where('h.lot = l.id')
            ->andWhere('l.copro = :code')
            ->setParameter('code', $code);
        $query = $qb->getQuery();
        $resultat = $query->getResult();
        return $resultat;
    }

}