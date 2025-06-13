<?php
require_once 'conexao.php';

$idDisciplina = '';
$nome = '';
$professor = '';

if (isset($_GET["act"]) && $_GET["act"] == "upd" && isset($_GET["idDisciplina"])) {
    $idDisciplina = (int) $_GET["idDisciplina"];
    $stmt = $pdo->prepare("SELECT * FROM disciplina WHERE idDisciplina = ?");
    $stmt->execute([$idDisciplina]);
    $disciplina = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($disciplina) {
        $nome = $disciplina['nome'];
        $professor = $disciplina['professor'];
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $idDisciplina = isset($_POST['idDisciplina']) ? trim($_POST['idDisciplina']) : '';
    $nome = trim($_POST['nome']);
    $professor = trim($_POST['professor']);

    if ($nome && $professor) {
        if ($idDisciplina != '') {
            $stmt = $pdo->prepare("UPDATE disciplina SET nome = ?, professor = ? WHERE idDisciplina = ?");
            $stmt->execute([$nome, $professor, $idDisciplina]);
        } else {
            $stmt = $pdo->prepare("INSERT INTO disciplina (nome, professor) VALUES (?, ?)");
            $stmt->execute([$nome, $professor]);
        }
        header("Location: editarDisciplinas.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disciplinas</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <h1><?= $idDisciplina ? 'Editar Disciplina' : 'Cadastre uma Disciplina:' ?></h1>
    
    <form action="disciplinas.php" method="POST">
        <input type="hidden" name="idDisciplina" value="<?= htmlspecialchars($idDisciplina) ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($nome) ?>">
        <label for="professor">Professor:</label>
        <input type="text" id="professor" name="professor" value="<?= htmlspecialchars($professor) ?>">
        <input type="submit" id="buttom" value="<?= $idDisciplina ? 'ATUALIZAR' : 'CADASTRAR' ?>">
    </form>

    <h2>Disciplinas Cadastradas</h2>
    <table border="1" cellpadding="10">
        <tr><th>Nome</th><th>Professor</th><th>Ações</th></tr>
        <?php
        $stmt = $pdo->query("SELECT idDisciplina, nome, professor FROM disciplina ORDER BY nome ASC");
        while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($linha['nome']) . "</td>";
            echo "<td>" . htmlspecialchars($linha['professor']) . "</td>";
            echo "<td>
                    echo "<td>
                    <a href='disciplinas.php?act=upd&idDisciplina=" . $linha['idDisciplina'] . "'>[Alterar]</a>
                        &nbsp;&nbsp;
                    <a href='excluirDisciplina.php?idDisciplina=" . $linha['idDisciplina'] . "' onclick=\"return confirm('Deseja realmente excluir?')\">[Excluir]</a>
                    </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>


