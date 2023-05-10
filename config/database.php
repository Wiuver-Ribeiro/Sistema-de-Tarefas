<?php
function getConnection()
{
    $host = 'localhost';
    $dbname = 'ead02';
    $user = 'root';
    $pass = '';

    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

    return new PDO($dsn, $user, $pass);
}
