<?php
    require "conexao.php";
    if($_GET['id']){
        $id = $_GET['id'];
        
        $sql = "UPDATE clientes SET ativo = 'n' WHERE id = '{$id}'";
        if($connect->query($sql)){
            echo "Dados excluido com sucesso!!";
            echo "<a href='../adm.php'><button type='button'>VOLTAR</button></a>";
        }else{
            echo "Erro ao tentar excluir os dados. ".$connect->error;
        }
        $connect->close();
    }
?>