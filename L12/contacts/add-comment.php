<?php

$data = $_POST;
var_dump($data);

$file = __DIR__ . "/storage" . date('Y-m-d') . '.json';

$storage = [];
$storage[] = $data;

$jsonData = json_encode($storage);

//$storage = fopen($file, 'wb');
//fclose($storage);


var_dump($file);
var_dump($storage, $jsonData);