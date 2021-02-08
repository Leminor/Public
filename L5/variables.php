<?php

$fruit = 'orange';
echo $fruit, PHP_EOL;

$fruit = 'apple';
echo $fruit, PHP_EOL;

$fruit = 3124;
echo $fruit, PHP_EOL;

// FAILS
// test = - $ must be
// $1test = - cant start with number
// $t/.'^t =  - cant consist ;'/.^& etc. symbols
// $te st = - no spaces

//AVAILABLE

$t1weq = 213;
$_te_st = 324;

$test = 'test';
$link =&$test;

$test =343;


var_dump($test, $link);


