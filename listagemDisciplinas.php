<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Disciplinas</title>
    <link rel="stylesheet" href="assets/style.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body id="tabela_disciplinas">
    <div class="botao_para_direita">
        <a href="cadastroDisciplinas.php" class="botao-link">Adicionar nova Disciplina</a>
    </div>


    <?php

    require_once 'conexao.php';

    try {
        $stmt = $pdo->query("SELECT idDisciplina, nome, professor FROM disciplina ORDER BY nome ASC");

        echo "<div class='tabela-container'>";
        
        if ($stmt->rowCount() > 0) {
            echo "<h2>Lista de Disciplinas</h2>";
            echo "<table>";
            echo "<tr><th>Nome</th><th>Professor</th><th>Ações</th></tr>";

            while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($linha['nome']) . "</td>";
                echo "<td>" . htmlspecialchars($linha['professor']) . "</td>";
                echo "<td>
                        <a href='editarDisciplinas.php?act=upd&idDisciplina=" . $linha['idDisciplina'] . "'>Alterar</a> |
                        <a href='excluirDisciplinas.php?idDisciplina=" . $linha['idDisciplina'] . "' onclick=\"return confirm('Tem certeza que deseja excluir esta disciplina?');\">Excluir</a>
                    </td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<h2>Nenhuma disciplina cadastrada.</h2>";
        }

        echo "</div>";

    } catch (PDOException $e) {
        echo "Erro ao buscar disciplinas: " . $e->getMessage();
    }
    ?>

</body>