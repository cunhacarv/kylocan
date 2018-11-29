<?php
    require "conexao.php";
    //if($$){
        $id = "1";
        
        $sql = "DELETE FROM clientes WHERE idclientes = '{$id}'";
        if($connect->query($sql)){
            echo "Dados excluido com sucesso!!";
            echo "<a href='#'><button type='button'>VOLTAR</button></a>";
        }else{
            echo "Erro ao tentar excluir os dados. ".$connect->error;
        }
        $connect->close();
    //}
?>