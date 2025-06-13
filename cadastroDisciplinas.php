<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disciplinas</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>
    <h1> Cadastre uma Disciplina:</h1>
    <form action="cadastrarDisciplinas.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
        <label for="professor">Professor:</label>
        <input type="text" id="professor" name="professor">
        <input type="submit" id="buttom" value="CADASTRAR">
    </form>
</body>
</html>