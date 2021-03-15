<?php
 // with feedback
function test() {
    echo 'Random numbet is: ' . mt_rand() . PHP_EOL;
}

// without feedback
function test2(): void
{
    echo 'Random numbet is: ' . mt_rand() . PHP_EOL;
}

test();

//anonymous function

function () {
    echo 'Random numbet is: ' . mt_rand() . PHP_EOL;
};

// How to call it 1

(function () {
    echo 'Random numbet is: ' . mt_rand() . PHP_EOL;
})();

// How to call it 2
$anonimous = function () {
    echo 'Random numbet is: ' . mt_rand() . PHP_EOL;
};

var_dump($anonimous);

function oddnumbers($value)
{
    return $value % 2 === 0;
}
$array = [1, 2, 3, 4, 21];
$array =array_filter($array, function ($value) {
    return $value % 2 === 0;
});
var_dump($array);

function sayHello($name, $age, $mood = ' ')
{
    echo "Hello, dear {$name}, {$age} years old {$mood} <br>";
}

sayHello("Alex", 23);
sayHello("Alrdfex", 45, 'good');

function intSum(...$ints)
{
 echo array_sum($ints), '<br>';
}
    intSum(1, 2, 3, 4);

// Game

function game(int $number)
{
    return $number === random_int(1, 10);
}

while(true) {
    $number = readline('Enter your number: ');
    echo game($number) ? 'Winner' : 'Looser';
    echo PHP_EOL;
}
