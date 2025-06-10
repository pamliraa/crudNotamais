<?php

$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "notamais";
$port = 3307;

try {
    $pdo = new PDO("mysql:host=$localhost;port=$port;dbname=$banco;charset=utf8", $user, $passw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "ERRO: " . $e->getMessage();
    exit;
}
?>
