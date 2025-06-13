<?php

require_once 'conexao.php';

try {
    $stmt = $pdo->query("SELECT idDisciplina, nome, professor FROM disciplina ORDER BY nome ASC");

    if ($stmt->rowCount() > 0) {
        echo "<h2>Lista de Disciplinas</h2>";
        echo "<table border='1' cellpadding='10'>";
        echo "<tr><th>Nome</th><th>Professor</th><th>Ações</th></tr>";

        while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($linha['nome']) . "</td>";
            echo "<td>" . htmlspecialchars($linha['professor']) . "</td>";
            echo "<td>
                    <a href='editarDisciplina.php?id=" . $linha['idDisciplina'] . "'>Alterar</a> |
                    <a href='excluirDisciplina.php?id=" . $linha['idDisciplina'] . "' onclick=\"return confirm('Tem certeza que deseja excluir esta disciplina?');\">Excluir</a>
                  </td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Nenhuma disciplina cadastrada.";
    }

} catch (PDOException $e) {
    echo "Erro ao buscar disciplinas: " . $e->getMessage();
}

?>
