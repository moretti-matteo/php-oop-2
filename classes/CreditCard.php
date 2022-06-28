<?php

class CreditCard
{
    private $number;
    private $expire_date;
    private $brand;
    private $cvc;


    public function __construct($number, $expire_date, $brand, $cvc)
    {
        $this->number = $number;
        $this->setExpire_date($expire_date);
        $this->brand = $brand;
        $this->cvc = $cvc;
    }

    /**
     * Get the value of cvc
     */
    public function getCvc()
    {
        return $this->cvc;
    }

    /**
     * Set the value of cvc
     *
     * @return  self
     */
    public function setCvc($cvc)
    {
        $this->cvc = $cvc;

        return $this;
    }


    /**
     * Get the value of brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of expire_date
     */
    public function getExpire_date()
    {
        return $this->expire_date;
    }

    /**
     * Set the value of expire_date
     *
     * @return  self
     */
    public function setExpire_date($expire_date)
    {
        if ($expire_date < date_create("now")) {
            throw new Exception("Carta di credito scaduta");
        }
        $this->expire_date = $expire_date;

        return $this;
    }
}
