<<<<<<< HEAD
<?php
    $hostname = "localhost";
    $banco = "banco_pessoas";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli ($hostname, $usuario, $senha, $banco);

    if($mysqli->connect_errno){
         echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
    }

=======
<?php
    $hostname = "localhost";
    $banco = "banco_pessoas";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli ($hostname, $usuario, $senha, $banco);

    if($mysqli->connect_errno){
         echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
    }

>>>>>>> 2908f98f48d5593b6625c86b50d5cbdf40767e8f
?>