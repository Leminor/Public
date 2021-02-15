<?php

var_dump(1 == 3);
var_dump(1 == 1);

var_dump('test' == 'qwerty');
var_dump('test' == 'test');

var_dump(1 === '1');
var_dump(1 == '1');

var_dump(0 === false);
var_dump(0 == false);

var_dump (1 > 3);
var_dump ('2020-05-02' > '2020-05-01');

var_dump (1 > 1);
var_dump (1 >= 1);

$minSalary = 350;
$maxSalary = 700;
$salary = random_int(300, 1000);

var_dump($salary, $salary >= $minSalary, $salary <= $maxSalary);

var_dump($salary, $salary >= $minSalary && $salary <= $maxSalary); //if 1 false - all false
var_dump($salary, $salary >= $minSalary || $salary <= $maxSalary); //if 1 true - all true

var_dump($salary, $salary >= $minSalary and $salary <= $maxSalary);  // additional and
var_dump($salary, $salary >= $minSalary or $salary <= $maxSalary);// additional or

var_dump($salary, $salary >= $minSalary && $salary <= $maxSalary && $salary != 666);

$isFineSalary = $salary >= $minSalary && $salary <= $maxSalary && $salary != 666;
var_dump($salary, $isFineSalary);