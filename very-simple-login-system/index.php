<?php
session_start();
require_once 'config.php';

if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
    echo 'Área restrita...';
} else {
    header("Location: login.php");
}

if (isset($_POST['sair'])) {
    session_destroy();
    header("Refresh:0");
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
    <form action="" method="POST">
        <input type="submit" value="Sair" name="sair">
    </form>
</body>
</html>