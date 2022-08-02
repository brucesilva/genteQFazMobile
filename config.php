<?php

$banco = 'genteQFazMobile';
$host = 'localhost';
$passw = '';
$user = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$banco", $user, $passw);
    return $pdo;
} catch (PDOException $e) {
    echo  $e->getMessage();
}
