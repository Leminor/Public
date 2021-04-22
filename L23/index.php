<?php
require_once __DIR__ . '/MyException.php';
require_once __DIR__ . '/StringHelper.php';
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/VipUser.php';

User::$discount = 10.2; //Set static
VipUser::$discount = 15.2;
var_dump(User::$discount, VipUser::$discount); // Both have the same 15.2 can change in Vip by parent function change

$user = new User();
$vip = new VipUser();

function getUser() {
    $rand = random_int(0, 1);
    if ($rand === 1) {
        return new User('Test', 'male');
    }
    return new VipUser('VIP Test', 'female');
}

$randomUser = getUser();
var_dump(get_class($randomUser));

unset($randomUser); //destruct will be called when we unset variable witch consists object


if ($randomUser instanceof VipUser) { //if we ask if it User and User and Vip will be User coz it inherit all options from it
    var_dump('Is VIP');
} else {
    var_dump('Is regular user');
}

$vip = new VipUser('Test qwerty', 'male', 11);

$vip2 = clone $vip; // we always work with object like with link; So all changes will be for all if we dont use clone
$vip2 ->setName('Lao');
$vip2 ->setAge(25);

$vip3 = clone $vip;
$vip3 ->setName('Limaao');
$vip3 ->setAge(55);

var_dump($vip);

var_dump($vip->toArray());


$user = new User('U01', 'not exist');

try {
    $user->level = 123;
    $user->size = 12553;
    $user->friend = 'Gerry';
} catch (RuntimeException $exception) { //should be before exception coz its heir
    var_dump('Time out');
} catch (MyException $exception) {
    var_dump('My exception: ' . $exception->getMessage());
} catch (Exception $exception) { //works is catch mistake
    var_dump($exception->getMessage());
} finally {  // works anyway
    var_dump('Expression is DONE');
}


var_dump($user->gerDiscount(), $vip->gerDiscount());

var_dump(StringHelper::camelize('my_string_text'));

var_dump('Objects: ' . User::getCount()); // static works in class so sees all objects

var_dump(User::TYPE, VipUser::TYPE);

var_dump($user->getType(), $vip->getType());

