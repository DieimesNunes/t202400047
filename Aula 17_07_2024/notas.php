<?php

    /* Isso é um comentário */

    if(isset ($_GET["bt_nome"])){
       $nome =  $_GET["bt_nome"];
       $nota1 = $_GET["bt_nota1"];
       $nota2 = $_GET["bt_nota2"];
       $nota3 = $_GET["bt_nota3"];
       $nota4 = $_GET["bt_nota4"];
    }


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo - Média Notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="meu_estilo.css">
</head>
<body>
    <div class="container text-center">
        <h1>Exemplo - Média Notas</h1>
    </div>
    <div class="container">
       <form action="" method="get">
            <label for="">Nome do aluno:</label>
            <input class="form-control" type="text" name="bt_nome">
            <label for="">Nota 01:</label>
            <input class="form-control" type="text" name="bt_nota1">
            <label  for="">Nota 02:</label>
            <input class="form-control" type="text" name="bt_nota2">
            <label  for="">Nota 03:</label>
            <input class="form-control" type="text" name="bt_nota3">
            <label  for="">Nota 04:</label>
            <input class="form-control" type="text" name="bt_nota4">

            <input class="btn btn-success" type="submit">
            <input class="btn btn-danger" type="reset">
       </form>

       <?php
            if(isset ($nome)){

                
                $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

                if($media>=7){

                    echo "<p>";
                    echo "O aluno " . $nome . " está APROVADO com a média " . $media;
                    echo "</p>";

                }elseif($media>=5){
                    echo "<p>";
                    echo "O aluno " . $nome . " está RECUPERAÇÃO com a média " . $media;
                    echo "</p>";
                }else{
                    echo "<p>";
                    echo "O aluno " . $nome . " está REPROVADO com a média " . $media;
                    echo "</p>";
                }
               
             }            
       ?>
   
    </div>


</body>
</html>