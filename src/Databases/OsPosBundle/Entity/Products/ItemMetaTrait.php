<?php

/*
 * Copyright (C) 2011-2018  Splash Sync       <contact@splashsync.com>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 */

namespace Databases\OsPosBundle\Entity\Products;

use Doctrine\ORM\Mapping as ORM;
use Splash\Bundle\Annotation as SPL;

/**
 * @abstract    OsPos Product Meta Trait
 */
trait ItemMetaTrait {
    
    /**
     * @var bool
     * 
     * @SPL\Field(  
     *          id      =   "isOffered",
     *          type    =   "bool",
     *          name    =   "Is Offered",
     *          itemtype=   "http://schema.org/Product", itemprop="offered",
     * )
     * 
     */
    private $isOffered;
    
    /**
     * Set is Offered
     *
     * @param bool $offered
     *
     * @return OsposItems
     */
    public function setIsOffered($offered)
    {
        $this->deleted = !$offered;

        return $this;
    }

    /**
     * Get is Offered
     *
     * @return integer
     */
    public function getIsOffered()
    {
        return !$this->deleted;
    }
    
    
}
