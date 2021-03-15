<?php

// Game

function game(int $number): bool
{
    return $number === random_int(1, 10);
}

var_dump(game(2));

while(true) {
    $number = readline('Enter your number: ');
    echo game($number) ? 'Winner' : 'Looser';
    echo PHP_EOL;

    $continue = readline('Play again (y/n): ');
    if ($continue !== 'yes') {
        echo 'Bye', PHP_EOL;
        break;
    }
}


// write data in variable
$isWinner = game(5);
var_dump($isWinner);

