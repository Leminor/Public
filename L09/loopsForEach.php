<?php

$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

// use to work with massive

$array = [1, 2, 3, 5, 6, 8, 9]

foreach ($array as $key => $data) {
    echo "[{$key}] = {$data}{$eol}";
}