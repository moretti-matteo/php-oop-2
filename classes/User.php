<?php
require_once __DIR__ . './CreditCard.php';

class User extends CreditCard
{
    private $name;
    private $surname;
    private $email;
    private $discount = 0;
    private $credit_card;

    public function __construct($name, $surname, $email, $discount, $credit_card)
    {

        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->setDiscount($discount);
        $this->credit_card = $credit_card;
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

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of surname
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

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

    /**
     * Get the value of credit_card
     */
    public function getCredit_card()
    {
        return $this->credit_card;
    }

    /**
     * Set the value of credit_card
     *
     * @return  self
     */
    public function setCredit_card($credit_card)
    {
        $this->credit_card = $credit_card;

        return $this;
    }
}
