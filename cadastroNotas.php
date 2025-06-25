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

        <h1>Cadastre uma Nota:</h1>

        <form action="cadastrarNotas.php" method="POST">
            <div class="input-group">
                <label for="nota">Nota:</label>
                <input type="number" id="nota" name="nota" placeholder="Ex:10">
            </div>

            <div class="input-group">
                <label for="descricao">Descrição:</label>
                <input type="text" id="descricao" name="" placeholder="Ex:Glauber" >
            </div>

            <input type="submit" id="buttom" value="CADASTRAR">
        </form>
    </div>
</body>
</html>
