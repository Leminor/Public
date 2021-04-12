<?php

require_once __DIR__ . '/Lib/sessions.php';

sessionSet('register-form', $_POST);

$errors = [];

$login = $_POST['login'] ?? null;

if (false === filter_var($login, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Login should be an email';
}

$name = $_POST['name'] ?? null;
if(!$name) {
    $errors[] = 'Name is required';
}

$password = $_POST['password'] ?? null;
$repeatPassword = $_POST['repeat_password'] ?? null;

if ($password !== $repeatPassword) {
    $errors[] = 'Password and Repeat password must be equals';
}

if ($errors) {
    setFlash('errors', $errors);
    header('Location: index.php');
    exit;
}

require_once __DIR__ . '/Lib/db.php';

getDBConnection();

$passwordHash = password_hash($password, PASSWORD_ARGON2ID);

$db = getDBConnection();
//$sql = "INSERT INTO users (name, login, password) VALUES ('{$name}', '{$login}', '{$passwordHash}')";
//$result = mysqli_query($db, $sql);

$sql = "INSERT INTO users (name, login, password) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($db, $sql);
mysqli_stmt_bind_param($stmt, 'sss', $name, $login, $passwordHash);

$result = mysqli_stmt_execute($stmt);

if (!$result) {
    $errors[] = mysqli_errno($db);
    setFlash('errors', $errors);
}

header('Location: index.php');