<?php

require_once __DIR__ . '/sessions.php';
require_once __DIR__ . '/db.php';

//password_hash('123123', PASSWORD_ARGON2ID);


$isGuest = $_SESSION['isGuest'] ?? true;

$users = [
    [
        'login' => 'test@test.com',
        'password' => '$argon2id$v=19$m=65536,t=4,p=1$MGt5LmZVdG94SlRLZGJ3WA$/nSjUiO9/EtA2TCE8HMS1L7gsHbENzgk1UPN5K0A/Vk', //123123
    ],
    [
        'login' => 'qwerty@test.com',
        'password' => '$argon2id$v=19$m=65536,t=4,p=1$MmQ2N0d4RjJLb29pOGtwdQ$ZAPsVY60hVRYv1cr/cb44nVIjf0+mputlWh/cpATEn8', //qqq123
    ],
];

if ($isGuest) {
    $login = $_POST['login'] ?? null;
    $password = $_POST['password'] ?? null;

    if ($login && $password) {
        $user = findUser($login);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['isGuest'] = false;
            $_SESSION['user'] = $user;
        } else {
            setFlash('errors', ['Login or password is incorrect']);
            require __DIR__ . '/../Views/auth_form.php';
            exit;
        }
    } else {
        require __DIR__ . '/../Views/auth_form.php';
        exit;
    }
}


function findUser(string $login): ?array
{
    $db = getDBConnection();
    $sql = 'SELECT * FROM users WHERE login = ?';
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, 's', $login);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    return mysqli_fetch_assoc($result);
}





//function findUser(string $login)  : ?array
//{
//    $users = [
//        [
//            'login' => 'test@test.com',
//            'name' => 'Lolso',
//            'password' => '$argon2id$v=19$m=65536,t=4,p=1$MGt5LmZVdG94SlRLZGJ3WA$/nSjUiO9/EtA2TCE8HMS1L7gsHbENzgk1UPN5K0A/Vk',
//        ],
//        [
//            'login' => 'qwerty@test.com',
//            'name' => 'Logho',
//            'password' => '$argon2id$v=19$m=65536,t=4,p=1$MmQ2N0d4RjJLb29pOGtwdQ$ZAPsVY60hVRYv1cr/cb44nVIjf0+mputlWh/cpATEn8',
//        ],
//    ];
//
//    foreach ($users as $user)
//    {
//        if (strtolower($user['login']) === strtolower($login)) {
//            return $user;
//        }
//    }
//    return null;
//}