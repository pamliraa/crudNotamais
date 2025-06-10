
<?php
require_once 'conexao.php';

if(isset($_POST['email'], $_POST['senha'])) {
    
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    if(empty($email)) {
        echo "Preencha seu email";
    } else if(empty($senha)) {
        echo "Preencha sua senha";
    } else {
    
        $sql = "SELECT * FROM aluno WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':email' => $email]);

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);


        if($usuario && md5($senha) == $usuario['senha']){
            session_start();
            $_SESSION['idAluno'] = $usuario['idAluno'];
            header("Location: painel.php");
            exit;
        } else {
            header("Location: login.php?erro=1");
            exit;

        }
    }
}
?>
