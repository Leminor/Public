<?php
$storage = __DIR__ . '/storage/';
$userRout = $_GET['rout'];
$rout = "{$storage}{$userRout}";


if (is_file($rout)) {
    unlink($rout);
} else {
    echo 'Cant remove directory';
    exit;
}


// unlink - file, unset - dir  or use   rmdir
$returnRout = dirname($rout);
header("Location:index.php?rout={$returnRout}");
