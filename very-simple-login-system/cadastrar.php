<?php
session_start();
require_once 'config.php';


if(isset($_POST['acao'])) {
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = 'INSERT INTO usuarios SET email = :email, senha = :senha';
    $sql = $pdo->prepare($sql);
    $sql->bindParam(':email', $email);
    $sql->bindParam(':senha', $senha);
    header("Location: login.php");
    return $sql->execute();
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
    <h2>Crie sua conta</h2>
    <form action="" method="POST">
        <input type="text" name="email" placeholder="Email">
        <br>
        <br>
        <input type="password" name="senha" placeholder="Senha">
        <br>
        <br>
        <input type="submit" value="Criar conta" name="acao">
    </form>
</body>
</html>