<?php
// Green/CoreBundle/Document/Configuration.php

namespace Green\CoreBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
/**
 * @MongoDB\Document(collection="Configuration")
 */
class Configuration
{
    
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $name;

    /**
     * @MongoDB\String
     */
    protected $name;   



    /**
     * @MongoDB\Timestamp
     */
    protected $created;

    /**
     * @MongoDB\Timestamp
     */
    protected $updated;

    /**
     * @MongoDB\preUpdate
     */
    public function setUpdatedValue()
    {
       $this->setUpdated(time());
    }    


    
}
