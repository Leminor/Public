<?php

$int = 1;
$float = 1.2;
$string = 'test';
$bool = true;
$bool = false;
$array = [1, 2, 'test'];
$object = new stdClass();
$null = null;

$file = fopen(__DIR__ . '/math.php', 'rb'); //example
fclose($file); //example

$resource = $file; //for work with file
$callable = static function (); //ispolniaemiy
