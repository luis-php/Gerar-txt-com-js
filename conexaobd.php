<?php

$usuario = "root";
$senha = "";
$dbname = "gerartxt";
$host = "localhost:3306";

try 
{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $usuarios, $senha);
}
catch (PDOException $e)
{
    echo $e->getMessage();
}
