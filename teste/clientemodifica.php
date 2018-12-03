<?php
    require_once "php_acao/conexao.php";
    session_start();
    if($_GET['id']){
        $id = $_GET['id'];
    }
    //echo $id;
    $sql = "SELECT * FROM clientes WHERE id = '{$id}'";
    $dados = $connect->query($sql);
    $linha = $dados->fetch_assoc();
?>
<!DOCTYPE html>
<html>
 <head>
    <title> <?=$_SESSION['nome'];?> </title>
    <meta name="description" content="Aprenda a criar um site completo que usa formulários em HTML">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="js/cep.js"></script>
    <script type="text/javascript" src="js/validador.js"></script>
 </head>
 <body>
  <h1> Cadastro de <?=$linha['nome'];?></h1> 
  <br/>

<form name="formulario" action="php_acao/modificacliente.php"  method="post">

<!-- DADOS PESSOAIS-->
<fieldset>
 <legend>Dados Pessoais</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="nome">Nome completo: </label>
   </td>
   <td align="left">
    <input type="text" name="nome" placeholder="Nome Completo" value="<?=$linha['nome'];?>"><input type="hidden" name="id" value="<?=$linha['id'];?>">
   </td>
  </tr>
  <tr>
      <td>
          <label for="sexo">Sexo: </label>
      </td>
      <td>
        <input type="radio" name="sexo" value="Masculino" checked>Masculino
        <input type="radio" name="sexo" value="Feminino">Feminino
      </td>
  </tr>
  <tr>
   <td>
    <label>Nascimento: </label>
   </td>
   <td align="left">
    <input type="date" name="nascimento" placeholder="dd/mm/aaaa" value="<?=$linha['nascimento'];?>"> 
   </td>
  </tr>
  <tr>
   <td>
    <label for="rg">RG: </label>
   </td>
   <td align="left">
    <input type="text" name="rg" size="13" maxlength="13" placeholder="111.111.111-1" value="<?=$linha['rg'];?>"> 
   </td>
  </tr>
  <tr>
   <td>
    <label>CPF:</label>
   </td>
   <td align="left">
    <input type="text" name="cpf" size="14" maxlength="14" onblur="validaformulario(this.value)" placeholder="111.111.111-11" value="<?=$linha['cpf'];?>">
   </td>
  </tr>
  <tr>
      <td>
          <label for="telefone">Celular: </label>
      </td>
      <td>
          <input type="text" name="celular" placeholder="(11)11111-1111" value="<?=$linha['celular'];?>">
      </td>
  </tr>
 </table>
</fieldset>

<br />
<!-- ENDEREÇO -->
<fieldset>
 <legend>Dados de Endereço</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="rua">Rua:</label>
   </td>
   <td align="left">
    <input type="text" id="rua" name="rua" value="<?=$linha['rua'];?>">
   </td>
   <td>
    <label for="numero">Número:</label>
   </td>
   <td align="left">
    <input type="text" name="numero" size="6" value="<?=$linha['numero'];?>">
   </td>
  </tr>
  <tr>
   <td>
    <label for="bairro">Bairro: </label>
   </td>
   <td align="left">
    <input type="text" id="bairro" name="bairro" value="<?=$linha['bairro'];?>">
   </td>
  </tr>
  <tr>
   <td>
    <label for="estado">Estado:</label>
   </td>
   <td align="left">
    <select name="estado" id="uf" value="<?=$linha['estado'];?>"> 
        <option value="AC">Acre</option> 
        <option value="AL">Alagoas</option> 
        <option value="AM">Amazonas</option> 
        <option value="AP">Amapá</option> 
        <option value="BA">Bahia</option> 
        <option value="CE">Ceará</option> 
        <option value="DF">Distrito Federal</option> 
        <option value="ES">Espírito Santo</option> 
        <option value="GO">Goiás</option> 
        <option value="MA">Maranhão</option> 
        <option value="MT">Mato Grosso</option> 
        <option value="MS">Mato Grosso do Sul</option> 
        <option value="MG">Minas Gerais</option> 
        <option value="PA">Pará</option> 
        <option value="PB">Paraíba</option> 
        <option value="PR">Paraná</option> 
        <option value="PE">Pernambuco</option> 
        <option value="PI">Piauí</option> 
        <option value="RJ">Rio de Janeiro</option> 
        <option value="RN">Rio Grande do Norte</option> 
        <option value="RO">Rondônia</option> 
        <option value="RS">Rio Grande do Sul</option> 
        <option value="RR">Roraima</option> 
        <option value="SC">Santa Catarina</option> 
        <option value="SE">Sergipe</option> 
        <option value="SP">São Paulo</option> 
        <option value="TO">Tocantins</option> 
   </select>
   </td>
  </tr>
  <tr>
   <td>
    <label for="cidade">Cidade: </label>
   </td>
   <td align="left">
    <input type="text" name="cidade" id="cidade" value="<?=$linha['cidade'];?>">
   </td>
  </tr>
  <tr>
   <td>
    <label for="cep">CEP: </label>
   </td>
   <td align="left">
    <input type="text" name="cep" size="10" maxlength="9" id="cep" value="<?=$linha['cep'];?>" onblur="pesquisacep(this.value);">
   </td>
  </tr>
 </table>
</fieldset>
<br />

<!-- DADOS DE LOGIN -->
<fieldset>
 <legend>Dados de login</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="email">E-mail: </label>
   </td>
   <td align="left">
    <input type="text" name="email" placeholder="exemplo@exemplo.com" value="<?=$linha['email'];?>">
   </td>
  </tr>
  <tr>
   <td>
    <label for="senha">Senha: </label>
   </td>
   <td align="left">
    <input type="password" name="senha"><span id="errosenha"> </span>
   </td>
  </tr>
  <tr>
   <td>
    <label for="passconfirm">Confirme a senha: </label>
   </td>
   <td align="left">
    <input type="password" name="passconfirm">
   </td>
  </tr>
 </table>
</fieldset>
<fieldset>
    <legend>Status de <?=$linha['nome'];?></legend>
    <table cellspacing="10">
        <tr>
            <td>
                <label for="tipo">Tipo de usuário: </label>
            </td>
            <td>
                <input type="text" name="tipo" value="<?=$linha['tipousuario'];?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="situacao">Usuário Ativo: </label>
            </td>
            <td>
                <input type="text" name="ativo" value="<?=$linha['ativo'];?>">
            </td>
        </tr>
    </table>
</fieldset>
<br />
<input type="submit">
<input type="reset" value="Limpar">
<a href="Mobile_Lines.php"><button type="button">Voltar</button></a>
</form>
 </body>
</html>