<?php

require_once __DIR__ . '/User.php';

class RegisteredUser extends User
{
    private $discount = 20;

    public function __construct($name, $surname, $email, $discount, $credit_card)
    {
        parent::__construct($name, $surname, $email, $discount, $credit_card);
    }



    /**
     * Get the value of discount
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the value of discount
     *
     * @return  self
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }
}
