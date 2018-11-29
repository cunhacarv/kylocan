<?php
    require "conexao.php";
    if($_POST){
        $nome = $_POST["nome"];
        $sexo = $_POST["sexo"];
        $nascimento = $_POST["nascimento"];
        $rg = $_POST["rg"];
        $cpf = $_POST["cpf"];
        $celular = $_POST["celular"];
        $rua = $_POST["rua"];
        $numero = $_POST["numero"];
        $bairro = $_POST["bairro"];
        $estado = $_POST["estado"];
        $cidade = $_POST["cidade"];
        $cep = $_POST["cep"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $passconfirm = $_POST["passconfirm"];
        if($senha != $passconfirm){
            echo "Senhas não conferem, volte e refaça o cadastro!!!";
            echo "<a href='../formulario.html'><button type='button'>VOLTAR</button></a>";
        }else{
            $sql = "INSERT INTO clientes (nome, sexo, nascimento, rg, cpf, celular, rua, numero, bairro, estado, cidade, cep, email, senha) 
            VALUES ('$nome', '$sexo', '$nascimento', '$rg', '$cpf', '$celular', '$rua', '$numero', '$bairro', '$estado', '$cidade', '$cep', '$email', '$senha')";
            if($connect->query($sql)){
                echo "Cliente adicionado com sucesso!!!!";
                echo "<a href='#'><button type='button'>VOLTAR</button></a>";
            }else{
                echo "Erro ".$sql." ".$connect->connect_error;
            }
            $connect->close();
        }      
    }
?>