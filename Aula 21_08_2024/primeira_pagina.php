<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION["nome"])){
        header("Location:login.php");
    }else{

    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Logado com usuário: <?php echo($_SESSION["nome"]);?></p>
    <a href="sair.php">Sair</a>
</body>
</html>