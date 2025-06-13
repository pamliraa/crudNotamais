<?php 

require_once 'conexao.php';

if (!isset($_POST['nome'], $_POST['professor'])) {
    exit("Acesso inválido.");
}

$nome = trim($_POST['nome']);   
$professor = trim($_POST['professor']);

if (!$nome || !$professor) {
    exit("Por favor, preencha todos os campos.");
}

$stmtCheck = $pdo->prepare("SELECT idDisciplina FROM disciplina WHERE nome = ?");
$stmtCheck->execute([$nome]);

if ($stmtCheck->rowCount()) {
    exit("Esta disciplina já está cadastrada.");
} 

$stmt = $pdo->prepare("INSERT INTO disciplina (nome, professor) VALUES (?, ?)");
if ($stmt->execute([$nome, $professor])) {
    header('Location: listagemDisciplinas.php'); 
    exit;
} else {
    exit("Erro ao cadastrar a disciplina.");
}

?>
