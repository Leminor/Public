<?php

$age = 18;


if ($age >= 18) {
    echo 'ok';
} else {
    echo 'fail';
}
echo PHP_EOL;

// DONT DO:
if ($age >= 18)
    echo 'ok';
else
    echo 'fail';

echo PHP_EOL;

// DONT DO:
if ($age >= 18) echo 'ok'; else echo 'fail';
echo PHP_EOL;


// Can do
if ($age >= 18):
    echo 'ok';
else:
    echo 'fail';
endif;
echo PHP_EOL;

echo $age >=18 ? 'OK' : 'FAIL';
echo PHP_EOL;



