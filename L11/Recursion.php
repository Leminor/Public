<?php

//Recursion is when function calls itself

// Random number

function rec() {
    echo mt_rand(), PHP_EOL;
    sleep(1);

    rec();
}

//rec();

function memo() {
    echo memory_get_usage(), PHP_EOL;
    sleep(1);

    memo();
}

//memo();


//while (true) {
//    echo mt_rand() . '>>' . memory_get_usage() . ' bytes used', PHP_EOL;
//    sleep(1);
//}

function likeWhile() {
    echo mt_rand() . '>>' . memory_get_usage() . ' bytes used', PHP_EOL;
    sleep(1);

    likeWhile();
}

//likeWhile();

function power(int $number, int $power)
{
    echo "{$number} ^ {$power} >>>", PHP_EOL;
    sleep(1);
    if ($power === 0) {
        return 1;
    }

    if ($power === 1) {
        echo "{$number} ^ {$power} = {$number}", PHP_EOL;
        return $number;
    }

    $result = $number * power ($number, $power -1);
    echo "{$number} ^ {$power} = {$result}", PHP_EOL;
    sleep (1);
    return $result;
}


power (3, 5);

/*
 * 3 ^ 3 = 3 * (3 ^ 2)
 * 3 ^ 2 = 3 * (3 ^ 1)
 * 3 ^ 1 = 3
 * 3 ^ 2 = 3 * 3 = 9
 * 3 ^ 3 = 3 * 9 = 27
 */

$counter = 0;

function fibonacci (int $n)
{
    static $storage = [];
    global $counter;
    $counter++;

    echo "{$counter} : {$n}", PHP_EOL;

    if ($n === 0) {
        return 0;
    }
    if ($n === 1) {
        return 1;
    }

    if (array_key_exists($n, $storage)) {
        return $storage[$n];
    }
    var_dump($storage);

    $result = fibonacci($n - 1) + fibonacci($n - 2);
    $storage[$n] = $result;

    return $result;
}

$number = fibonacci(4);
var_dump($number);

/*
 *                                           (9)   n4 = 3
 *                       (8)   n3 = 2                +             (7)    n2 = 1
 *          (3)  n2 = 1           +        (4) n1 = 1        (6)   n1 = 1     +     (5) n0 = 0
 *    (2) n1 = 1     +  (1) n0 = 0
 */


// Menu counter

$array = [
    1,
    2,
    3,
    4 => [
        'so',
        'mo',
        'do' => [
            1,
            2,
            3 => [
                5,
                10,
            ]
        ]
    ]
];

function countRecursive($array)
{
    $count = 0;
    foreach ($array as $value) {
        $count++;
        if (is_array($value)) {
            $preCount = $count;
            $recursionCount = countRecursive($value);
            $count += $recursionCount;
            echo "{$preCount} + {$recursionCount} = {$count}", PHP_EOL;
        }
    }
    return $count;
}

var_dump(countRecursive($array));
var_dump(count($array));