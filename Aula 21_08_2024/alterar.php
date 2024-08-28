<?php
    include("conexao.php");
    
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION["nome"])){
        header("Location:login.php");
    }else{
        $id_login=$_SESSION["id_login"];
        $nome=$_SESSION["nome"];
        $email= $_SESSION["email"];
        $senha= $_SESSION["senha"];

        $sql = "SELECT * FROM tabela_login WHERE email =  '$email'";
    
        $sql_exec = $mysqli->query($sql) or die ($mysqli->error);
        $usuario = $sql_exec->fetch_assoc();

        if(isset($_POST["bt_nome"])){
        
            $senha = $_POST["bt_senha"];
            $rsenha = $_POST["bt_rsenha"];
    
            
    
            if($senha === $rsenha){
                $nome = $_POST["bt_nome"];
                $email = $_POST["bt_email"];
    
    
               $senha = password_hash($_POST['bt_senha'], PASSWORD_DEFAULT);
                

               $sql_code = "UPDATE tabela_login
               SET nome = '$nome', 
               email = '$email',
               senha = '$senha'         
               WHERE id_login = '$id_login'";
       
               $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);
       
    
                    
              
                     
              
               
    
            }else{
                $mensagem = "<div class='alert alert-danger mt-3'> Não alterou </div>";
            }
                
        }


        








    }





?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alteração de conta</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
    </head>
    <body>

    <div class="container d-flex justify-content-center">
        
        <form class="form" method="post">
            <div class="flex-column">
                <h1>Alteração de conta</h1>
                <label>Nome: </label>
            </div>
            <div class="inputForm">
                <svg height="60" viewBox="0 -9 32 32" width="40" xmlns="http://www.w3.org/2000/svg">
                    <g id="Layer_3" data-name="Layer 3">
                        <path
                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z">
                        </path>
                    </g>
                </svg>
                <input type="text" class="input" placeholder="Entre com seu nome" name="bt_nome" value="<?php if(isset($usuario['nome'])){
                    echo($usuario['nome']);
                    } ?>" required/>
            </div>
            <div class="flex-column">
                <label>Email: </label>
            </div>
            <div class="inputForm">
                <svg height="20" viewBox="0 0 32 32" width="20" xmlns="http://www.w3.org/2000/svg">
                    <g id="Layer_3" data-name="Layer 3">
                        <path
                            d="m30.853 13.87a15 15 0 0 0 -29.729 4.082 15.1 15.1 0 0 0 12.876 12.918 15.6 15.6 0 0 0 2.016.13 14.85 14.85 0 0 0 7.715-2.145 1 1 0 1 0 -1.031-1.711 13.007 13.007 0 1 1 5.458-6.529 2.149 2.149 0 0 1 -4.158-.759v-10.856a1 1 0 0 0 -2 0v1.726a8 8 0 1 0 .2 10.325 4.135 4.135 0 0 0 7.83.274 15.2 15.2 0 0 0 .823-7.455zm-14.853 8.13a6 6 0 1 1 6-6 6.006 6.006 0 0 1 -6 6z">
                        </path>
                    </g>
                </svg>
                <input type="text" class="input" placeholder="Entre com email" name="bt_email" value="<?php if(isset($usuario['nome'])){
                    echo($usuario['email']);
                    } ?>"required/>
            </div>

            <div class="flex-column">
                <label>Senha: </label>
            </div>
            <div class="inputForm">
                <svg height="20" viewBox="-64 0 512 512" width="20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0">
                    </path>
                    <path
                        d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0">
                    </path>
                </svg>
                <input type="password" class="input" placeholder="Entre com a sua senha" name="bt_senha" required/>
            </div>

            <div class="flex-column">
                <label>Repita a senha: </label>
            </div>
            <div class="inputForm">
                <svg height="20" viewBox="-64 0 512 512" width="20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0">
                    </path>
                    <path
                        d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0">
                    </path>
                </svg>
                <input type="password" class="input" placeholder="Repita a sua senha" name="bt_rsenha" required/>
            </div>

            <input type="submit" class="button-submit" value="Alterar"/>
            <a class="button-submit" href="primeira_pagina.php" >Voltar</a>
           
           
        </form>
        <?php
            if(isset($mensagem)){
                echo $mensagem;

            }
        ?>
    </div>
        
    </body>
</html>