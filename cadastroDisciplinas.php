<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disciplinas</title>
    <link rel="stylesheet" href="styleCadastro.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">

        <h1>Cadastre uma Disciplina:</h1>

        <form action="cadastrarDisciplinas.php" method="POST">
            <div class="input-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="input-group">
                <label for="professor">Professor:</label>
                <input type="text" id="professor" name="professor" required>
            </div>

            <input type="submit" id="buttom" value="CADASTRAR">
        </form>
    </div>
</body>
</html>
