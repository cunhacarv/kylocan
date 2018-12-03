<?php
    //pegar a mercadoria via get e selecionar no banco de dados para modificação
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
<form name="formulario" action="php_acao/.php"  method="post">
<fieldset>
 <legend>Dados do produto</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="marca">Marca: </label>
   </td>
   <td align="left">
    <input type="text" name="marca" placeholder="Digite a marca">
   </td>
  </tr>
  <tr>
      <td>
          <label for="modelo">Modelo: </label>
      </td>
      <td>
      <input type="text" name="modelo" placeholder="Digite o modelo">
      </td>
  </tr>
  <tr>
   <td>
    <label for="preco">Preço: R$</label>
   </td>
   <td align="left">
    <input type="number" step="0,01" min="0" name="preco" placeholder="Preço"> 
   </td>
  </tr>
  <tr>
   <td>
    <label for="quantidade">Quantidade: </label>
   </td>
   <td align="left">
    <input type="number" name="quantidade" min="0" placeholder="quantidade"> 
   </td>
  </tr>
  </table>
    <input type="submit">
    <input type="reset" value="Limpar">
</form>
</body>
</html>