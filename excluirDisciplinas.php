<?php
include "conexao.php";
$idDisciplina = $_GET['idDisciplina'] ?? '';

if ($idDisciplina !== '') {
    try {
        $stmt = $pdo->prepare("DELETE FROM disciplina WHERE idDisciplina = :id");
        $stmt->bindValue(':id', $idDisciplina);
        $stmt->execute();
        echo "Disciplina excluído com sucesso!";
    } catch (PDOException $erro) {
        echo "Erro ao excluir: " . $erro->getMessage();
    }
}

header("Location: listagemDisciplinas.php");
exit;
?>