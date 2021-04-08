<?php

$dbConnection = null;

function getDBConnection(): ?mysqli
{
    global $dbConnection;

    if ($dbConnection === null) {
        $dbConnection = mysqli_connect('db', 'user', 'pwd', 'db');    //from docker-compose
    }

    return $dbConnection;
}