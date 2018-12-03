<?php
    require_once "php_acao/conexao.php";
    session_start();
    $sqlc = "SELECT * FROM clientes";
    $dadosc = $connect->query($sqlc);
    $linhac = $dadosc->fetch_assoc();
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
    <title><?=$_SESSION['nome'];?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h2>Tela do adiministrador</h2>
    <a href = "sair.php"><button type = "button">Sair do sistema</button></a>
    <p> </p>
    <div class="row">
        <div class="col-sm-12 col-md-6"><a href='clientesadm.php'><button type='button'>CLIENTES</button></a></div>
        <div class="col-sm-12 col-md-6"><a href='produtoadm.php'><button type='button'>PRODUTOS</button></a></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
            crossorigin="anonymous"></script>
</body>
</html>