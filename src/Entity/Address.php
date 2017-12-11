<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 11/12/2017
 * Time: 10:58
 */

namespace Sofrecom\Training\Entity;


class Address implements PersistableInterface
{
    use PersistableTrait;
    
    /** @var  string */
    protected $street;
    
    /** @var  string */
    protected $city;
    
    /** @var  string */
    protected $country;
    
    /** @var  User */
    protected $user;

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return Address
     */
    public function setStreet(string $street): Address
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function setCity(string $city): Address
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Address
     */
    public function setCountry(string $country): Address
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return Address
     */
    public function setUser(User $user): Address
    {
        $this->user = $user;
        return $this;
    }
}
