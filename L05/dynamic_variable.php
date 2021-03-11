<?php

$a = 'Hello';
$$a = 'Hello2'; // Makes $Hello = 'Hello2'
$$$a = 'Hello3'; // Makes $Hello2 = 'Hello3'

echo $a, PHP_EOL, $$a, PHP_EOL, $$$a, PHP_EOL, PHP_EOL;
echo $Hello, PHP_EOL, $Hello2, PHP_EOL, PHP_EOL;


$pizza = '!';
$is = 'pizza';
$it = 'is';
$hello = 'it';
$a = 'hello';

echo $a, PHP_EOL, $$a, PHP_EOL, $$$a, PHP_EOL, $$$$a, PHP_EOL, $$$$$a, PHP_EOL;

