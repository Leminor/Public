<?php

// Old method

define('APP_VERSION', '3.0.1');
echo APP_VERSION, PHP_EOL;

// New method

const POWER = '220v';
Echo POWER, PHP_EOL;

const MY_COEFFICIENT = 3.1;
$salary = 2000;
echo $salary * MY_COEFFICIENT, PHP_EOL;


#Magic constants

echo __DIR__; PHP_EOL;
echo __FILE__; PHP_EOL;
echo __LINE__; PHP_EOL;

// To get all file here (from this dir)

require __DIR__ . '/strings.php';
