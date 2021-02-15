<?php

$age = readline ('Enter your age: ');

if (!is_numeric($age)) {
    exit ('Data is incorrect'), PHP_EOL;
}

if($age >= 18 && $age < 60) {
    echo 'You are welcome', PHP_EOL;
} elseif ($age >=60) {
    echo 'You are too old', PHP_EOL;
} else {
    echo 'Access denied', PHP_EOL;
}

echo PHP_EOL;
echo PHP_EOL;

switch ($age) {
    case 33:
        echo 'Good age', PHP_EOL;
        break;
    case $age >= 18 && $age < 60:
        echo 'You are welcome', PHP_EOL;
        break;
    case $age >=60:
        echo 'You are too old', PHP_EOL;
        break;
    default:
        echo 'Access denied', PHP_EOL;
}

//HW Calculator + print 123

$x = ;
if ($x == 1) {
    echo 1;
}
if ($x == 2 {
    echo 2;
}
if ($x == 2 {
    echo 2;
}