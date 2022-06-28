<?php
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/Toy.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/CreditCard.php';
require_once __DIR__ . '/classes/RegisteredUser.php';

$products = [
    new Toy("toy1", 10, 1, "dog", "type1", 15),
    new Food("food1", 5, 2, "cat", "type2", new DateTime("1 Sep 2022"))
];

$credit_card1 = new CreditCard(1234, new DateTime("5 Nov 2023"), "Visa", 111);

//Carta scaduta
// $credit_card2 = new CreditCard(5678,new DateTime("2 Feb 2022"),"Mastercard",222);
// var_dump($credit_card2);

$user = new User("Mario", "Rossi", "mariorossi@gmail.com", 0, $credit_card1);
$userRegistered = new RegisteredUser("Mario", "Rossi", "mariorossi@gmail.com", 20, $credit_card1);

var_dump($userRegistered);
