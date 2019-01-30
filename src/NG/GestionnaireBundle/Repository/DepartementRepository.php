<?php

namespace NG\GestionnaireBundle\Repository;

/**
 * DepartementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DepartementRepository extends \Doctrine\ORM\EntityRepository
{

    public function allDept()
    {
        $qb =$this->_em->createQueryBuilder();
        $qb->select('d')
            ->from('NGGestionnaireBundle:Departement', 'd')
            ->orderBy('d.nom');
        $query = $qb->getQuery();
        $resultat = $query->getResult();
        return $resultat;
    }

}
