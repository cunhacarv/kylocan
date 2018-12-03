<?php
    require_once "php_acao/conexao.php";
    session_start();
    $sqlp = "SELECT * FROM produto";
    $dadosp = $connect->query($sqlp);
    $linhap = $dadosp->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
    <legend>Produto</legend>
    <a href = "action.html"><button type = "button">Adcionar novo produto</button></a>
<table border = "1">
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Preço</th>
            <th>Quantidade em estoque</th>
            <th>Opções</th>
        </tr>
    <?php
            do{
    ?>
                <tr>
                    <td>
                        <?=$linhap['marca']?>
                    </td>
                    <td>
                        <?=$linhap['modelo']?>
                    </td>
                    <td>
                        R$<?=number_format($linhap['preco'], 2, ",", ".")?>
                    </td>
                    <td>
                        <?=$linhap['quantidade']?> Unidades
                    </td>
                    <td>
                        <a href="editarproduto.php?id=<?=$linhap['idproduto']?>"><button type="button">Editar</button></a>
                    </td>
                </tr>
    <?php
            }while($linhap = mysqli_fetch_assoc($dadosp));?>
    </table>
</fieldset>
</body>
</html>