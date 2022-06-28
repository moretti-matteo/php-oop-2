<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product
{
    private $type;
    private $size;

    public function __construct($name, $price, $quantity, $animalType, $type, $size)
    {
        parent::__construct($name, $price, $quantity, $animalType);
        $this->type = $type;
        $this->size = $size;
    }

    /**
     * Get the value of size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
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
}
