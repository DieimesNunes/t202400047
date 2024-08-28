<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION["nome"])){
        header("Location:login.php");
    }else{

    }
?>