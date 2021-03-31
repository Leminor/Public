<?php

//var_dump($_COOKIE, $_COOKIE['test-cookie']);

//'google.com' domen lvl 1
//'google.com.ua' domen lvl 2
///'calendar.google.com' - calendar - sub domen

//setcookie('test-cookie', 'qwerty', time() + 10 * 60); // (name, value, life time) client pc

session_start(); // on server +other

$_SESSION['name'] = 'Alex';
$_SESSION['group'] = 'Sea';

var_dump($_SESSION);