<?php

$dbname = 'php-do-zero';
$host = 'localhost';
$dbuser = 'root';
$dbpass = '';

$dsn = "mysql:dbname=$dbname;host=$host";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    
} catch(PDOException $e) {
    echo 'Falha ao conectar' . $e->getMessage();
}