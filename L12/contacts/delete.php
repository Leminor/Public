<?php

$commentID = $_GET['id'];

require_once __DIR__ . '/Lib/db.php';
$db = getDBConnection();

$sqlDel = <<<SQL
DELETE FROM comments WHERE id = ?
SQL;

$stmt = mysqli_prepare($db, $sqlDel);

mysqli_stmt_bind_param($stmt, 'i', $commentID);
$result = mysqli_stmt_execute($stmt);

header('Location: index.php');
