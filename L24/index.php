<?php

// if we name classes like full road (Components/Cli/Request)
//spl_autoload_register(function (string $class)
//{
//    $rout =__DIR__ . DIRECTORY_SEPARATOR .str_replace('_', DIRECTORY_SEPARATOR, $class) . '.php';
//    if (!file_exists($rout)) {
//        throw new Exception("Class {$class} can not be loaded");
//    }
//});

// if we use namespace + autoloader class

require_once __DIR__ . '/Autoloader.php';
spl_autoload_register('Autoloader::load');

use models\User;
use components\Application;
use components\cli\Request as CliRequest;
use components\web\Request as WebRequest;

$user = new User();
$cliRequest = new CliRequest();
$webRequest = new WebRequest();
//$app = new Application();

$request = php_sapi_name() === 'cli' ? new CliRequest() : new WebRequest();
$app = new Application($request);

$app->test($user);
$app->test($request);

$user->sale();

var_dump(php_sapi_name());
var_dump($user, $webRequest, $cliRequest);

$webRequest->parse();
$cliRequest->parse();
