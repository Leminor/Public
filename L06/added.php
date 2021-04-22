<?php


$a = 11;
$b = 30;
$c = 40;


function salesHelper ($number, $a, $b, $c)
{
    if ($number === 0) {
        exit ('Your cart is empty');
    } else {
    switch ($number) {
        case $number % $c === 0:
            $solution = "{$c} pcs bundle x " . $number / $c;
            break;
        case $number % $c <= $a:
            $solution = "{$c} pcs bundle x " . floor($number / $c) . " + {$a} pcs bundle x " . ceil(($number % $c) / $a);
            break;
        case $number % $c <= $b && $b / ceil(($number % $c) / $a)* $a === 0:
            $solution = "{$c} pcs bundle x " . floor($number / $c) . " + {$a} pcs bundle x " . ceil(($number % $c) / $a);
            break;
        case $number % $c <= $b && $b / ceil(($number % $c) / $a)* $a != 0:
            $solution = "{$c} pcs bundle x " . floor($number / $c) . " + {$b} pcs bundle x 1";
            break;
        case $number % $c >= $b && ($number % $c) % $b < $b:
            $solution = "{$c} pcs bundle x " . floor($number / $c) . " + {$b} pcs bundle x " . floor(($number % $c) / $b) . " + {$a} pcs bundle x " . ceil(($number % $c) % $b / $a);
            break;
        case ($number % $c) % $b === 0:
            $solution = "{$c} pcs bundle x " . floor($number / $c) . " + {$b} pcs bundle x " . (($number % $c) / $b);
            break;
        case $b % ceil(($number % $c) / $a) != 0 :
            $solution = "{$c} pcs bundle x " . floor($number / $c) . " + {$b} pcs bundle x " . floor(($number % $c) / $b) . " + {$a} pcs bundle x " . ceil((($number % $c) % $b) / $a) ;
            break;
        case $b % ceil(($number % $c) / $a)* $a == 0:
            $solution = "{$c} pcs bundle x " . floor($number / $c) . " + {$b} pcs bundle x " . ceil(($number % $c) / $b);
            break;
        default:
            $solution = 'Error';
    }
    }
    return $solution;
}

$result = [];

for ($number = 1; $number <= 100; $number++) {
    $result[$number] = salesHelper($number, $a, $b, $c);
}

var_dump($result);

