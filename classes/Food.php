<?php

require_once __DIR__ . './Product.php';

class Food extends Product
{
    private $type;
    private $expireDate;

    public function __construct($name, $price, $quantity, $animalType, $type, $expireDate)
    {
        parent::__construct($name, $price, $quantity, $animalType);
        $this->type = $type;
        $this->expireDate = $expireDate;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of expireDate
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Set the value of expireDate
     *
     * @return  self
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }
}
