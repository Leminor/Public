<?php

$source = [
    'test',
    123,
    [1,2,3]
];

//$string = $source[0];
//$int = $source[1];
//$array = $source[2];

//list($string, $int, $array) = $source;
[$string, $int, $array] = $source;

var_dump($string, $int, $array,);

function getData()
{
    return [
        'data' => [1, 2, 3, 4],
        'page' => 1,
        'totalPages' => 10,
    ];
}

$data = getData()['data'];
var_dump($data);

extract(getData());
var_dump($data, $page, $totalPages);

$newArray = compact('string', 'array', 'totalPages');
$newArray2 = [
    'string' => $string,
    'array' => $array,
    'totalPages' => $totalPages,
];
var_dump($newArray);
var_dump($newArray2);
