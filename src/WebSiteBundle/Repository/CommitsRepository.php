<?php

namespace WebSiteBundle\Repository;

/**
 * CommitsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommitsRepository extends \Doctrine\ORM\EntityRepository
{
    
    /**
     * Retrieve List of Uncommited Changes
     *
     * @param   int         $Max            Limit Number Of Results      
     * @param   string      $ObjectType     Filter Objects Types     
     *
     * @return array|null
     */
    public function findUncommitedChanges($Max = 10, $ObjectType = NUll)
    {
        return $this->createQueryBuilder('C')
            ->where('C.notified is NULL')
            ->setMaxResults($Max)
            ->getQuery()
            ->getResult();
    }  
    
    /**
     *      @abstract    Delete all Old Notified Commits
     * 
     *      @return      int        Count of Deleted Commits
     */        
    function Clean()
    {
        return $this->createQueryBuilder("C")
            ->delete()
            ->where("C.notified = 1")
            ->getQuery()
            ->execute();        
    }    
}
