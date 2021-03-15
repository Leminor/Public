<?php

$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

$k = 0;
while ($k < 6) {
    echo $k, $eol;
    $k++;
}

$handle = fopen(__DIR__ . '/multiply_table.php', 'rb');
while ($line = fgets($handle)) {
   var_dump($line);
}
fclose($handle);

echo $eol;

$array = ['test', 'qwerty', '12345'];
while($array) {
    echo array_shift($array), $eol;
}


echo $eol;