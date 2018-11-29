<?php
    require "conexao.php";
    //if(??){
        $nome = "Doidão";
        $cpf = " ";
        $sexo = " ";
        $endereco = " ";
        $cep = " ";
        $email = " ";
        $telefone = " ";
        $senha = " ";
        
        $sql = "UPDATE clientes SET nome = '$nome', cpf = '$cpf', sexo = '$sexo', endereco = '$endereco', cep = '$cep', 
        email = '$email', telefone = '$telefone', senha = '$senha'";
        if($connect->query($sql)){
            echo "Cliente atualizado com sucesso!!!!";
            echo "<a href = '#'><button type='button'>VOLTAR</button></a>";
        }else{
            echo "Erro ao tentar atualizar os dados do cliente. ".$connect->error;
        }
        $connect->close();
    //}



?>