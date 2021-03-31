<?php

$file = __DIR__ . "/storage/" . date('Y-m-d') . '.json'; //create file name

if(file_exists($file)) {
// Read data
    $jsonData = file_get_contents($file);
    $storage = json_decode($jsonData, true);
//Write data
    $data = $_POST;
    $data['time'] = time();

    $storage[] = $data;

    $jsonData = json_encode($storage);


    file_put_contents($file, $jsonData);

} else {


//Write data
    $data = $_POST;
    $data['time'] = time();

    $storage[] = $data;

    $jsonData = json_encode($storage);


    file_put_contents($file, $jsonData);
}

header('Location: index.php');





//$storage = fopen($file, 'wb');
//fclose($storage);


//var_dump($file);
//var_dump($storage, $jsonData);