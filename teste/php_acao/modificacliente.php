<?php
    require "conexao.php";
    if($_POST){
        $id = $_POST['id'];
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
        
        $sql = "UPDATE clientes SET nome = '$nome', sexo = '$sexo', nascimento = '$nascimento', rg = '$rg', cpf = '$cpf',
        celular = '$celular', rua = '$rua', numero = '$numero', bairro = '$bairro', estado = '$estado', cidade = '$cidade', 
        cep = '$cep', email = '$email', senha = '$senha', tipousuario = '$tipo', ativo = '$ativo' WHERE id = '{$id}'";
        if($connect->query($sql)){
            echo "Cliente atualizado com sucesso!!!!";
            echo "<a href = '../adm.php'><button type='button'>VOLTAR</button></a>";
        }else{
            echo "Erro ao tentar atualizar os dados do cliente. ".$connect->error;
        }
        $connect->close();
    }
?>