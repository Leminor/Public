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
$callable = static function {

}; //ispolniaemiy

var_dump((string)1.002);
var_dump((int) '521.7');
var_dump((float)'521.7');
var_dump((int)'521.7 eggs');
var_dump((int)'    521.7 eggs');
var_dump((int)'eggs 521.7');
var_dump((int)true);
var_dump((int)false);
var_dump((int)'true');
var_dump((int)'false');
var_dump((int)true);
var_dump((bool)'');
var_dump((bool)'0');
var_dump((bool)0);
var_dump((bool)[]);
var_dump((bool)'test');
var_dump((bool)'1');
var_dump((bool)1);
var_dump((bool)[1]);

var_dump(is_int(1.1));
var_dump(is_int(1));
var_dump(is_bool(1));
var_dump(is_array([1]));
var_dump(is_numeric(1));
var_dump(is_numeric(1.2));

var_dump(isset($t123));
var_dump(empty($t123));

echo null, PHP_EOL;
echo false, PHP_EOL;


print null;
print PHP_EOL;

print false;
print PHP_EOL;


var_dump(null);
var_dump(false);
var_dump(new stdClass());

