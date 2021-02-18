<?php

// Old method. Dont use
$programLanguages = array();
var_dump($programLanguages);

//New method
$programLanguagesNew = [];
var_dump($programLanguagesNew);

$massive1 = [
    0 => 'PHP',
    1 => 'JS',
    2 => 'C++',
    3 => 'Java',
    4 => 'Go',
    5 => 'Kotlin',
];
var_dump($massive1);

$massive2 = [
    'PHP',
    'JS',
    'C++',
    'Java',
    'Go',
    'Kotlin',
    [
        'HTML',
        'CSS',
        'XHTML',
    ]
];

$massive2[] = 'C#'; // add next key in the end
$massive2[9] = 'Scala'; // if key doesnt exist - create new under your key
$massive2[4] = 'HTML'; //if key exist - change it
$massive2[] = 'Python'; // add next key in the end. now end is 9. doesnt fill skipped before that

unset($massive2[4], $massive2[10]); // delete key 4

var_dump($massive2);
print_r($massive2); //beauty print

$student = [
    'name' => 'Vasil',
    'age' => 22,
    'gender' => 'male',
    'programingLanguages' => [
        'PHP',
        'JS',
        'Go'
    ]
];

$student[] = 'TEST';

print_r($student);
var_dump($student['name']);

echo "{$student['name']} ({$student['age']} years old)", PHP_EOL;

var_dump($student['programingLanguages'][1]);



