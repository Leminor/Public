<?php

$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

echo $eol;

// limited amount of repeats (i - iteractions)
for ($i = 0; $i < 5; $i++) {
    echo $i, $eol;
}

// Limited time
$time = time();

for ($i = 1; time() - $time < 2; $i++) {
    echo $i, ' >> ', date('Y-m-d H:i:s'), $eol;
    sleep(1); //repeat 1 per second.
}

for ( ; ; ) {
    $rand = random_int(1, 7);
    echo $rand, $eol;
    if ($rand ===3) {
        break;
    }
    sleep(1);
}


$array = ['test', 'qwerty', '12345'];
$count = count($array);

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i], $eol;
}

echo $eol;

