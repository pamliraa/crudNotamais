<?php

require_once '../conexao.php';

if (!isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
    exit("Acesso inválido.");
}

    $nome = trim($_POST['nome']);   
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

if (!$nome || !$email || !$senha) {
    exit("Por favor, preencha todos os campos.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("E-mail inválido.");
}
    $stmtCheck = $pdo->prepare("SELECT idAluno FROM aluno WHERE email = ?");
    $stmtCheck->execute([$email]);

if ($stmtCheck->rowCount()) {
    exit("Este e-mail já está cadastrado.");
}
$stmt = $pdo->prepare("INSERT INTO aluno (nome, email, senha) VALUES (?, ?, ?)");
if ($stmt->execute([$nome, $email, password_hash($senha, PASSWORD_DEFAULT)])) {
    header('Location: ../login.php');
    exit;
} else {
    exit("Erro ao cadastrar usuário.");
}
?>