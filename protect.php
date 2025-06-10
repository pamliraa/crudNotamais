<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['idAluno'])) {
    die("Você não pode acessar essa página porque não está logado <p><a href=\"login.php\">Tela de login</a></p>");
}
?>