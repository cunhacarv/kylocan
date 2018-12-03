<?php
    require_once "php_acao/conexao.php";
    session_start();
    $sqlc = "SELECT * FROM clientes";
    $dadosc = $connect->query($sqlc);
    $linhac = $dadosc->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$_SESSION['nome'];?></title>
</head>
<body>
<fieldset>
    <legend>Clientes</legend>
    <table border = "1">
        <tr>
            <th>Nome</th>
            <th>Sexo</th>
            <th>Nascimento</th>
            <th>RG</th>
            <th>CPF</th>
            <th>Celular</th>
            <th>Rua</th>
            <th>Número</th>
            <th>Bairro</th>
            <th>Estado</th>
            <th>Cidade</th>
            <th>CEP</th>
            <th>E-mail</th>
            <th>Tipo</th>
            <th>Ativo</th>
            <th>Opções</th>
        </tr>
    <?php
            do{
    ?>
                <tr>
                    <td>
                        <?=$linhac['nome']?>
                    </td>
                    <td>
                        <?=$linhac['sexo']?>
                    </td>
                    <td>
                        <?=$linhac['nascimento']?>
                    </td>
                    <td>
                        <?=$linhac['rg']?>
                    </td>
                    <td>
                        <?=$linhac['cpf']?>
                    </td>
                    <td>
                        <?=$linhac['celular']?>
                    </td>
                    <td>
                        <?=$linhac['rua']?>
                    </td>
                    <td>
                        <?=$linhac['numero']?>
                    </td>
                    <td>
                        <?=$linhac['bairro']?>
                    </td>
                    <td>
                        <?=$linhac['estado']?>
                    </td>
                    <td>
                        <?=$linhac['cidade']?>
                    </td>
                    <td>
                        <?=$linhac['cep']?>
                    </td>
                    <td>
                        <?=$linhac['email']?>
                    </td>
                    <td>
                        <?= $linhac['tipousuario']?>
                    </td>
                    <td>
                        <?=$linhac['ativo']?>
                    </td>
                    <td>
                        <a href="clientemodifica.php?id=<?=$linhac['id']?>"><button type="button">Editar</button></a>
                        <a href="php_acao/apagacliente.php?id=<?=$linhac['id']?>"><button type="button">Excluir</button></a>
                    </td>
                </tr>
    <?php
            }while($linhac = mysqli_fetch_assoc($dadosc));?>
    </table>
</fieldset>
</body>
</html>