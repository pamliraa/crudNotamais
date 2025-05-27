<?php


$localhost = "localhost";
$user = "root";
$passw = "aluno";
$banco = "notamais";

global $pdo;

try{
    $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost,$user,$passw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}
?>