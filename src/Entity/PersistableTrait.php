<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 11/12/2017
 * Time: 11:08
 */

namespace Sofrecom\Training\Entity;


trait PersistableTrait
{
    /** @var  string */
    private $id;

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id) : PersistableInterface
    {
        $this->id = $id;
        return $this;
    }
}
