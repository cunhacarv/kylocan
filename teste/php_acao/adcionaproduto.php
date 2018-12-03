<?php
    require_once "conexao.php";
    if($_POST){
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $preco = number_format($_POST['preco'], 2, ",", ".");
        $quantidade = $_POST['quantidade'];
        /*echo "$marca <br>";
        echo "$modelo <br>";
        echo "$preco <br>";
        echo "$quantidade <br>";*/
        $sql = "INSERT INTO produto (marca, modelo, preco, quantidade) VALUES ('$marca', '$modelo', '$preco', '$quantidade')";
        if($connect->query($sql)){
            echo "Produto adicionado com sucesso!!!!<br>";
            echo "<a href='../produtoadm.php'><button type='button'>VOLTAR</button></a>";
        }else{
            echo "Erro ".$sql." ".$connect->connect_error;
        }
        $connect->close();
    }
?>