<?php
    require "conexao.php";
    if($_POST){
        $nome = trim($_POST["nome"]);
        $sexo = $_POST["sexo"];
        $nascimento = $_POST["nascimento"];
        $rg = trim($_POST["rg"]);
        $cpf = trim($_POST["cpf"]);
        $celular = trim($_POST["celular"]);
        $rua = trim($_POST["rua"]);
        $numero = trim($_POST["numero"]);
        $bairro = trim($_POST["bairro"]);
        $estado = $_POST["estado"];
        $cidade = trim($_POST["cidade"]);
        $cep = trim($_POST["cep"]);
        $email = trim($_POST["email"]);
        $senha = md5(trim($_POST["senha"]));
        $passconfirm = md5(trim($_POST["passconfirm"]));
        $tipo = $_POST["tipo"];
        $ativo = $_POST["ativo"];
        $sql = "INSERT INTO clientes (nome, sexo, nascimento, rg, cpf, celular, rua, numero, bairro, estado, cidade, cep, email, senha, tipousuario, ativo) 
        VALUES ('$nome', '$sexo', '$nascimento', '$rg', '$cpf', '$celular', '$rua', '$numero', '$bairro', '$estado', '$cidade', '$cep', '$email', '$senha', '$tipo', '$ativo')";
        if($connect->query($sql)){
            echo "Cliente adicionado com sucesso!!!!";
            echo "<a href='#'><button type='button'>VOLTAR</button></a>";
        }else{
            echo "Erro ".$sql." ".$connect->connect_error;
        }
        $connect->close();
    }      
?>