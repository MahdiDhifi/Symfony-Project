<?php

namespace News\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
abstract class User extends BaseUser
{
    protected $id;
    public function __consctruct(){
        
        parent::__construct();
    }
    
}

