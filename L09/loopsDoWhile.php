<?php

$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

$data = [1, 2, 3, 6, 8, 9];

do {
    $number = random_int(1, 10);
    echo $number, $eol;
} while (in_array($number, $data));

echo $eol;

$number = random_int(1, 10);
while (in_array($number, $data)) {
    $number = random_int(1, 10);
    echo $number, $eol;
}