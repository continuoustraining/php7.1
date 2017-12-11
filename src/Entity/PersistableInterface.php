<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 11/12/2017
 * Time: 11:05
 */

namespace Sofrecom\Training\Entity;


interface PersistableInterface
{
    public function getId() : string;
    
    public function setId(string $id) : PersistableInterface;
}