<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota+</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="big-div">
        <div id="div-foto">
            <img src="assets/foto_login.png" alt="fotologin" id="foto">
        </div>
        <div id="form">
            <h1 id="bem-vindo">Seja Bem-Vindo!</h1>
            <form action="logar.php" method = "POST">
                <label for="email" class="label">Email:</label>
                <input type="text" name="email" id= "email" class="input">
                <label for="senha" class="label">Senha:</label>
                <input type="password" name="senha" id="senha"  class="input">
                <input type="submit"  id="button" value="ENTRAR">
                <div class="div-erro">
        <?php
            if (isset($_GET['erro']) && $_GET['erro'] == 1) {
                echo '<p>E-mail ou senha incorretos.</p>';
                }
        ?>
            
            </form>
        
        </div>
    </div>
</body>
</html>