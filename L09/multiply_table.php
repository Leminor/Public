<?php

$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

for ($col = 1; $col <= 9; $col++) {
    for ($row = 1; $row <= 9; $row++) {
        $result = $col * $row;
        echo "{$col} * {$row} = {$result}", $eol;
    }

    echo $eol;
}