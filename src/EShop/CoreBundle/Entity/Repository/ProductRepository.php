<?php
/**
 * Created by JetBrains PhpStorm.
 * User: casvanmarcel
 * Date: 10/21/13
 * Time: 1:50 PM
 */
namespace EShop\CoreBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;

class ProductRepository extends EntityRepository {
    /**
     * @param null $limit
     * @return Product array
     */
    public function getLatestProducts($limit = null) {
        $qb = $this->createQueryBuilder('p')
            ->select('p','i.filename')
            ->addOrderBy('p.appearance_year', 'DESC')
            ->leftJoin('EShop\CoreBundle\Entity\Image', 'i', Join::WITH, 'i.product = p.id');

        if (false === is_null($limit)) {
            $qb->setMaxResults($limit);
        }
//        var_dump($qb->getQuery()->getResult());exit;
        return $qb->getQuery()->getResult();
    }
}