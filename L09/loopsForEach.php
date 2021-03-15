<?php

$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

// use to work with massive

$array = [1, 2, 3, 5, 6, 8, 9];

foreach ($array as $key => $value) {
    echo "[{$key}] = {$value}{$eol}";
}

foreach ($array as $data) {
    echo "{$data}{$eol}";
}

$bigArray = [];
for ($i = 0; $i < 150; $i++) {
    $bigArray[] = mt_rand();
}

foreach ($bigArray as $index => $data) {
    if ($index % 9 !== 0) {
        continue;
    }
    echo "[{$index}] = {$data}{$eol}";
}

foreach ($array as $key => $value) {
    $array[$key] = "{$value} [OK]";
}

var_dump($array);

foreach ($array as &$value) {
    $value .= "[OK]";
}
unset($value);

var_dump($array);