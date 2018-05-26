<?php
session_start();
require_once 'config.php';

if(isset($_POST['acao'])) {
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
    $sql = $pdo->prepare($sql);
    $sql->bindParam(':email', $email);
    $sql->bindParam(':senha', $senha);
    $sql->execute();
    if($sql->rowCount() > 0) {
        $dados = $sql->fetch();
        $_SESSION['id'] = $dados['id'];
        header("Location: index.php");
    } else {
        echo 'Senha incorreta';
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h2>Entrar em sua conta</h2>
    <form action="" method="POST">
        <input type="text" name="email" placeholder="Email">
        <br>
        <br>
        <input type="password" name="senha" placeholder="Senha">
        <br>
        <br>
        <input type="submit" value="Entrar" name="acao">
    </form>
    <br>
    <a href="cadastrar.php">Criar sua conta</a>
</body>
</html>