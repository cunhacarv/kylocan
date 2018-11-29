<?php
    require "php_acao/conexao.php";
    session_start();
    $email = isset($_POST["email"])?addslashes(trim($_POST["email"])):FALSE;
    $senha = isset($_POST["senha"])?md5(trim($_POST["senha"])):FALSE;
    if(!$email || !$senha){
        echo "Senha ou email não foram digitados!!!";
        exit;
    }
    $sql = " SELECT * FROM clientes WHERE email = '{$email}' and senha = '{$senha}'";
    $dados = $connect->query($sql);
    $linha = $dados->fetch_assoc();
    if($linha){
        if($email == $linha["email"] && $senha == $linha["senha"]){
            $_SESSION["id"] = $linha["id"];
            $_SESSION["nome"] = $linha["nome"];
            $_SESSION["sexo"] = $linha["sexo"];
            $_SESSION["nascimento"] = $linha["nascimento"];
            $_SESSION["rg"] = $linha["rg"];
            $_SESSION["cpf"] = $linha["cpf"];
            $_SESSION["celular"] = $linha["celular"];
            $_SESSION["rua"] = $linha["rua"];
            $_SESSION["numero"] = $linha["numero"];
            $_SESSION["bairro"] = $linha["bairro"];
            $_SESSION["estado"] = $linha["estado"];
            $_SESSION["cidade"] = $linha["cidade"];
            $_SESSION["cep"] = $linha["cep"];
            $_SESSION["email"] = $linha["email"];
            header("location: #");
        }
    }
?>

