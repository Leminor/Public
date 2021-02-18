<?php

$progLang = [
    'PHP',
    'JS',
    'C++',
    'Java',
    'Go',
    'Kotlin',
    ];

asort($progLang); // a-z
arsort($progLang); // z-a
shuffle($progLang); //shake

print_r($progLang);

$numbers = [
    '1',
    '200',
    '2',
    '10',
    '3',
    '43',
    '203',
    '8',
    '66',
    '2033',
];

asort($numbers);
print_r($numbers);


$students = [
    [
        'name' => 'Dmyt',
        'age' => 22,
    ],
    [
        'name' => 'Vas',
        'age' => 28,
    ],
    [
        'name' => 'Ores',
        'age' => 50,
    ],
    [
        'name' => 'Fpres',
        'age' => 34,
    ],
    [
        'name' => 'Gosi',
        'age' => 18,
    ],
];

uasort($students, function (array $a, array $b){
    return $a['age'] <=> $b['age'];
// Old version:
//    if ($a['age'] === $b['age']) {
//        return 0;
//    }
//
//    return $a['age'] < $b['age'] ? -1:1;
});

print_r($students);