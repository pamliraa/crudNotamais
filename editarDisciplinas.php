<?php
require_once 'conexao.php';

$idDisciplina = '';
$nome = '';
$professor = '';
$modo = 'Cadatrar'; 

if (isset($_GET["act"]) && $_GET["act"] === "upd" && isset($_GET["idDisciplina"])) {
    $idDisciplina = (int) $_GET["idDisciplina"];
    $stmt = $pdo->prepare("SELECT * FROM disciplina WHERE idDisciplina = ?");
    $stmt->execute([$idDisciplina]);
    $disciplina = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($disciplina) {
        $nome = $disciplina['nome'];
        $professor = $disciplina['professor'];
        $modo = 'Atualizar';
    }
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $idDisciplina = $_POST['idDisciplina'] ?? '';
    $nome = trim($_POST['nome']);
    $professor = trim($_POST['professor']);

    if ($nome && $professor) {
        if ($idDisciplina !== '') {
           
            $stmt = $pdo->prepare("UPDATE disciplina SET nome = ?, professor = ? WHERE idDisciplina = ?");
            $stmt->execute([$nome, $professor, $idDisciplina]);
        } else {
            
            $stmt = $pdo->prepare("INSERT INTO disciplina (nome, professor) VALUES (?, ?)");
            $stmt->execute([$nome, $professor]);
        }
        header("Location: listagemDisciplinas.php"); 
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disciplinas</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body class="classeBody">
    <div class="container">

        <h1><?= $modo ?> uma Disciplina:</h1>

        <form method="POST">
            <input type="hidden" name="idDisciplina" value="<?= htmlspecialchars($idDisciplina) ?>">

            <div class="input-group">
                <label for="nome">Nome:</label>
                <input
                    type="text"
                    id="nome"
                    name="nome"
                    placeholder="Ex:Matemática"
                    value="<?= htmlspecialchars($nome) ?>"
                    required
                >
            </div>

            <div class="input-group">
                <label for="professor">Professor:</label>
                <input
                    type="text"
                    id="professor"
                    name="professor"
                    placeholder="Ex:Glauber"
                    value="<?= htmlspecialchars($professor) ?>"
                    required
                >
            </div>

            <input type="submit" id="buttom" value="ATUALIZAR">
        </form>
    </div>
</body>
</html>
