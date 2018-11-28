<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Calculadora</title>
</head>
 
<body>
<?
   $a = isset($_POST["a"]) ? $_POST["a"] : '';
   $b = isset($_POST["b"]) ? $_POST["b"] : '';
?>
<form title="Formulário Teste" id="formteste" name="formteste" action="" method="post">
   Valor 1: <input name="a" type="number" value="<? echo $a ?>"/><br />
   Valor 2: <input name="b" type="number" value="<? echo $b ?>"/>
   <br /><br />
   Selecione uma operação:<br />
   <input name="operacao" type="radio" value="Soma" />Soma<br />
   <input name="operacao" type="radio" value="Subtração" />Subtração<br />
   <input name="operacao" type="radio" value="Multiplicação" />Multiplicação<br />
   <input name="operacao" type="radio" value="Divisão" />Divisão
   <input type="hidden" name="oculto" value="efetuar"/>
   <br /><br/>
   <input name="calcular" type="submit" value="Calcular"/>
   <input name="limpar" type="reset" value="Limpar"  onclick="javascript:window.location.reload();"/>
   <br /><br />
</form>
</body>
 
<?php
if ($_POST && $_POST["oculto"] == "efetuar"){
   $a     = $_POST["a"];
   $b     = $_POST["b"];
   $sinal = $_POST["operacao"];
   switch ($sinal){
      case $sinal == "Soma":
	$total = $a + $b;
	break;
      case $sinal == "Subtração":
	$total = $a - $b;
	break;
      case $sinal == "Multiplicação":
	$total = $a * $b;
	break;
      case $sinal == "Divisão":
	$total = $a / $b;
	break;
   }
   echo "Valor Total da operação: ".$total;
   if ($a>$b){
      echo "<br/><br/>O Valor 1 é MAIOR que o Valor 2.";
   }
   elseif ($a<$b){
      echo "<br/><br/>O Valor 1 é MENOR que o Valor 2.";
   }
   else{
      echo "<br/><br/>Valores iguais.";
   }
}
?>
</html>