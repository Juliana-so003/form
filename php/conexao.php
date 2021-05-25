<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "dbTeste";
    if($conn = mysqli_connect($servidor, $usuario, $senha, $database)){
       // echo "ok";
    }else {
        echo "deu merda";
    }
?>