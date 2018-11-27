<?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "torcidas";
$user = "root";
$pass = "";
// conecta ao banco de dados
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
// seleciona a base de dados em que vamos trabalhar
mysql_query("SET NAMES 'utf8'");
mysql_select_db($db, $con);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT t.nome as torcedor, ti.nome as time, ti.bandeira
FROM torcidas.torcedor as t, torcidas.time as ti
WHERE t.time_idtimme = ti.idTimme");
// executa a query

$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
?>
<html lang="pt_br">
	<head>
	<title>Exemplo</title>
	<meta charset="utf-8"/>
</head>
<body>
<?php
	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
			<p>Nome:<?=$linha['torcedor']?>  - Time <?=$linha['time']?>  <img src="<?=$linha['bandeira']?>" width="50px"/></p>
<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysql_fetch_assoc($dados));
	// fim do if 
	}
?>
</body>
</html>
<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>