<?php
 // with feedback
function test() {
    echo 'Random number is: ' . mt_rand() . PHP_EOL;
}

test();

// without feedback
function test2(): void
{
    echo 'Random numbet is: ' . mt_rand() . PHP_EOL;
}

test2();

//show function name
function test3()
{
    echo __FUNCTION__, PHP_EOL;
}

test3();

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

// use function to filter array
function oddNumbers($value)
{
    return $value % 2 === 0;
}

$numbers = [1, 2, 3, 4, 5, 6, 9, 10];
$numbers = array_filter($numbers, 'oddNumbers');
var_dump($numbers);

// noname filter
$array = [1, 2, 3, 4, 21];
$array =array_filter($array, function ($value) {
    return $value % 2 === 0;
});
var_dump($array);

//function with argument. Say hello

function sayHello($name, $age, $mood = 'ok')
{
    echo "Hello, dear {$name}, {$age} years old, who is {$mood} <br>";
}

sayHello("Alex", 23);
sayHello("Alrdfex", 45, 'good');
sayHello(age: 15,mood: 'happy', name: 'Tori');

echo '<br>';

//function with argument, that we define

function sayHello2(string $name, int $age, string $mood = 'ok')
{
    echo "Hello, dear {$name}, {$age} years old, who is {$mood} <br>";
}

sayHello2("Alex", 23);
sayHello2("Alrdfex", 45, 'good');
sayHello2(age: 15,mood: 'happy', name: 'Tori');

//Function that takes everything and put in variable. '...' before $ints means that it can take unlimited amount of arguments.

function intSum(...$ints)
{
 echo array_sum($ints), '<br>';
}
    intSum(1, 2, 3, 4);

// Show that function can use just inside variables. it cant use global ones: inside changes. but global - not

$data = 333;

function hiding($insideData) {
    $insideData = 8888;
    var_dump($insideData);
}
hiding($data);
var_dump($data);

// another way. both changes. DONT USE IT

$data2 = 333;

function hiding2(&$insideData) {
    $insideData = 8888;
    var_dump($insideData);
}
hiding2($data2);
var_dump($data2);

// but can use this in that way

$data3 = 333;

function hiding3($insideData) {
    return $insideData = 8888;
}

$data3 = hiding3($data3);
var_dump($data3);

// either dont do that. GLOBALS makes array from all u have in code.

function globals() {
    var_dump($GLOBALS);
    var_dump($GLOBALS['data3']);
}

globals();