<?php

require_once __DIR__ . '/Lib/security.php';


$comment = $_POST['comment'] ?? '';

if (!$comment) {
    setFlash('errors', ['Comment is required']);
    header('Location: index.php');
    exit;
}

$db = getDBConnection();

$sql = 'INSERT INTO `comments` (user_id, comment) VALUES (?, ?)';
$stmt = mysqli_prepare($db, $sql);

$userId = $_SESSION['user']['id'];
mysqli_stmt_bind_param($stmt, 'is', $userId, $comment);
$result = mysqli_stmt_execute($stmt);

if (!$result) {
    setFlash('errors', [mysqli_stmt_error($stmt)]);
}

header('Location: index.php');
exit;



//mysqli_bind_param($stmt, );



/*
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

*/




//$storage = fopen($file, 'wb');
//fclose($storage);


//var_dump($file);
//var_dump($storage, $jsonData);