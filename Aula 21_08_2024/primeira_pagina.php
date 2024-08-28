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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estiloo.css">
</head>
<body>
    <div class="container text-center">
        <p>Logado com usuário: <?php echo($_SESSION["nome"]);?></p>

        <div class="row d-flex justify-content-center">
            <div class="card ms-3" style="width: 18rem;">
                <img src="img/alterar.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Alteração de dados</h5>
                    <p class="card-text">Deseja alterar seus dados (Senha, email e outros)</p>
                    <a href="alterar.php" class="btn btn-primary">Alterar</a>
                </div>
            </div>

            <div class="card ms-3" style="width: 18rem;">
                <img src="img/deletar.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Deletar</h5>
                    <p class="card-text">Deseja excluir sua conta?</p>
                    <a href="deletar.php" class="btn btn-primary">Deletar</a>
                </div>
            </div>
        </div>
        

        
        <a href="sair.php">Sair</a>
    </div>
    
</body>
</html>