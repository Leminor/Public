<?php

session_start();

$isGuest = $_SESSION['isGuest'] ?? true;

$users = [
    [
        'login' => 'test@test.com',
        'password' => '123123',
    ],
    [
        'login' => 'qwerty@test.com',
        'password' => 'qqq123',
    ],
];

if ($isGuest) {
    $login = $_POST['login'] ?? null;
    $password = $_POST['password'] ?? null;

    if ($login && $password) {

    } else {
        require __DIR__ . '/../views/auth_form.php';
    }
    exit;
}

function findUser(string $login)
{
    $users = [
        [
            'login' => 'test@test.com',
            'password' => '123123',
        ],
        [
            'login' => 'qwerty@test.com',
            'password' => 'qqq123',
        ],
    ];

    foreach ($login && $password) {
        $user = findUser($login);
        if (!$user || $user['password'] !== $password)
    }
}