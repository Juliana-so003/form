<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "dbEscola";

$conexao = new mysqli($servidor, $usuario, $senha, $bancodedados);

if($conexao->connect_error){
    die("Conexão invalida; ". $connect->$connect_error);
}

?>