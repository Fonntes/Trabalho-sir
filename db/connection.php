<?php

function pdo_connection_mysql() {
    $DATABASE_HOST = "localhost";
    $DATABASE_USER = "root";
    $DATABASE_PASS = "";
    $DATABASE_NAME = "unitask";
    try{
        $pdo = new PDO('mysql:host=' .
        $DATABASE_HOST . ';dbname='
        . $DATABASE_NAME . ';charset=utf8' ,
        $DATABASE_USER,
        $DATABASE_PASS);

        echo("connected!");

        return $pdo;
    }
    catch (PDOException $exception)
    {
        exit('Failed to connect to database!');
    }
}
?>