<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 11/12/2017
 * Time: 10:56
 */

namespace Sofrecom\Training\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class User implements PersistableInterface
{
    use PersistableTrait;
    
    /** @var  string */
    protected $firstname;
    
    /** @var  string */
    protected $lastname;
    
    /** @var  ArrayCollection */
    protected $addresses;
    
    public function __construct()
    {
        $this->addresses = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return User
     */
    public function setFirstname(string $firstname): User
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return User
     */
    public function setLastname(string $lastname): User
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @param Address $address
     * @return User
     */
    public function addAddress(Address $address) : User
    {
        $address->setUser($this);
        $this->addresses->add($address);
        return $this;
    }
}
