<?php

$comment = $_POST['comment'] ?? '';
$commentID = $_GET['id'];

require_once __DIR__ . '/Lib/db.php';

$db = getDBConnection();

    $sqlEdit = <<<SQL
UPDATE comments SET comment = ? WHERE id = ?;
SQL;

    $stmt = mysqli_prepare($db, $sqlEdit);
    mysqli_stmt_bind_param($stmt, 'si', $comment, $commentID);
    $result = mysqli_stmt_execute($stmt);

    header('Location: index.php');
