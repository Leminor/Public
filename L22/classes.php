<?php

declare(strict_types=1); //shows that u cant put string in inr even if its changable;

require_once __DIR__ . "/User.php";

var_dump(User::TYPE);

// if properties are PUBLIC

//$user = new User();
//$user->name = "Alex";
//$user->age = 24;
//$user->gender = 'male';
//
//var_dump($user, $user->name, $user->age);
//
//$user2 = new User();
//$user2->name = "Mary";
//$user2->age = 40;
//$user2->gender = 'female';
//
//$user->printInfo();
//
//$vipUser = new VipUser();
//$vipUser->name = "Arno";
//$vipUser->age = 45;
//$vipUser->gender = 'male';


//var_dump($user, $vipUser);

// If properties are PROTECTED

$user = new User(); // -> if u have "return $this" in method
$user
    ->setName( "Alex")
    ->setAge(24)
    ->setGender( 'male');

$user2 = new User();
$user2->setName( "Mary");
$user2->setAge(40);
$user2->setGender( 'female');

$user->printInfo();

$vipUser = new VipUser();
$vipUser->setName( "Arno");
$vipUser->setAge(45);
$vipUser->setGender( 'male');

$vipUser->printInfo();
$vipUser->makeCoffee();

var_dump($user->getName());

$vipUser->makeCoffee();
$user->makeCoffee();
