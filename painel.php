<?php
require_once 'protect.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página com Sidebar</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

</head>
<body>

    <div class="sidebar">
        <a href="#" class="menu-item active"><i class="bi bi-house-door"></i> Início</a>
        <a href="#" class="menu-item"><i class="bi bi-file-earmark-text"></i> Notas</a>
        <a href="listagemDisciplinas.php" class="menu-item"><i class="bi bi-journal-text"></i> Disciplinas</a>
        <a href="#" class="menu-item"><i class="bi bi-trophy"></i> Metas</a>

        <div class="logout">
            <a href="logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a>
        </div>
    </div>

    <div class="conteudo">
        <h1>Bem-vindo</h1>
        <p>Conteúdo principal aqui.</p>
    </div>

</body>
</html>
