<?php

$usuario = "root";
$senha = "escola";
$dbname = "gerartxt";
$host = "localhost";
$port = 3306;

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
    echo $e->getMessage();
}
