<?php

class Product
{
    private $name;
    private $price;
    private $quantity;
    private $animalType;


    public function __construct($name, $price, $quantity, $animalType)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->animalType = $animalType;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of animalType
     */
    public function getAnimalType()
    {
        return $this->animalType;
    }

    /**
     * Set the value of animalType
     *
     * @return  self
     */
    public function setAnimalType($animalType)
    {
        $this->animalType = $animalType;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
