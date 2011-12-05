<?php
    require 'conexao.php';

    $sql = "SELECT * FROM tbprofessor";
    
    $retorno = $conexao->query($sql);
    if($retorno->num_rows > 0){
        while($linha = $retorno->fetch_assoc()){
     echo $linha['id_prof']. " - ". $linha['nome_prof']. " - ". $linha['cpf']. " - ".$linha['ano']. '<br/>'; 
        }
    } else{
        echo "nao foi encontrado";
    }
  
?>