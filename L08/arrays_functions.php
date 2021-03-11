<?php

$progLang = [
    'PHP',
    'JS',
    'C++',
    'Java',
    'Go',
    'Kotlin',
];


//array_push($progLang, 'C#'); // useless
$progLang[] = 'C#'; // useful

$php = array_shift($progLang);//takes first massive element and kills it
array_unshift($progLang, $php); // put something in massive from the top. takes looots resources
print_r($progLang);

$other = [
    'HTML',
    'CSS',
];

$allLang = array_merge($other, $progLang);
var_dump(count($progLang)); //how many elements
var_dump($php);
var_dump($allLang);

$keys = [
    'name',
    'age',
    'gender',
];

$values = [
    'Dmytro',
    '22',
    'male',
];

$data = array_combine($keys, $values);
print_r($data);

$student = [
//    'name' => 'Vasil',
    'age' => 22,
    'gender' => 'male',
    ];

print_r($student);
if (array_key_exists('name', $student)) {
    var_dump($student['name']);
} else {
    echo 'Need name', PHP_EOL;
}
var_dump($student['name']);

print_r(array_unique($other));
