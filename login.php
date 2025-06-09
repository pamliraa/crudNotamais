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
                <div class="icon-input">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg>
                    <input type="text" name="email" id= "email" class="input">
                </div>
                <label for="senha" class="label">Senha:</label>
                <div class="icon-input">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm0-80h480v-400H240v400Zm240-120q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80ZM240-160v-400 400Z"/></svg>
                    <input type="password" name="senha" id="senha"  class="input">
                </div>
                <input type="submit"  id="button" value="ENTRAR">
                <div class="div-erro">
        <?php
            if (isset($_GET['erro']) && $_GET['erro'] == 1) {
                echo '<p>E-mail ou senha incorretos.</p>';
                }
        ?>

        <div id="cadastro">
            <p> Não tem uma conta?</p>
                <a href="cadastro/cadastro.php">CRIE JÁ</a>
        </div>
            
            </form>
        
        </div>
    </div>
</body>
</html>