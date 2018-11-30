<!DOCTYPE html>
<html>
 <head>
 <?php
        require_once "php_acao/conexao.php";
        session_start();    
    ?>
    <title> Perfil de <?=$_SESSION['nome'];?> </title>
    <meta name="description" content="Aprenda a criar um site completo que usa formulários em HTML">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script>
        function validaformulario() {
            var senha = document.forms["formulario"]["senha"].value;
            var passconfirm = document.forms["formulario"]["passconfirm"].value;
            if (senha != passconfirm){
                alert("Senha não confere!!!");
                return false;
            }
        }
    </script>
 </head>
 <body>
  <h1> Perfil de <?=$_SESSION['nome'];?></h1> 
  <h2> Preencha o formulário abaixo para efetuar suas compras</h2><br/>

<form name="formulario" action="php_acao/cadastronovousuario.php" onsubmit = "return validaformulario()" method="post">

<!-- DADOS PESSOAIS-->
<fieldset>
 <legend>Dados Pessoais</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="nome">Nome completo: </label>
   </td>
   <td align="left">
    <input type="text" name="nome" value="<?=$_SESSION['nome'];?>">
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
    <input type="date" name="nascimento" value="<?=$_SESSION['nascimento'];?>"> 
   </td>
  </tr>
  <tr>
   <td>
    <label for="rg">RG: </label>
   </td>
   <td align="left">
    <input type="text" name="rg" size="13" maxlength="13" value="<?=$_SESSION['rg'];?>"> 
   </td>
  </tr>
  <tr>
   <td>
    <label>CPF:</label>
   </td>
   <td align="left">
    <input type="text" name="cpf" size="14" maxlength="14" value="<?=$_SESSION['cpf'];?>">
   </td>
  </tr>
  <tr>
      <td>
          <label for="telefone">Celular: </label>
      </td>
      <td>
          <input type="text" name="celular" value="<?=$_SESSION['celular'];?>">
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
    <input type="text" name="rua" value="<?=$_SESSION['rua'];?>">
   </td>
   <td>
    <label for="numero">Número:</label>
   </td>
   <td align="left">
    <input type="text" name="numero" size="6" value="<?=$_SESSION['numero'];?>">
   </td>
  </tr>
  <tr>
   <td>
    <label for="bairro">Bairro: </label>
   </td>
   <td align="left">
    <input type="text" name="bairro" value="<?=$_SESSION['bairro'];?>">
   </td>
  </tr>
  <tr>
   <td>
    <label for="estado">Estado:</label>
   </td>
   <td align="left">
    <select name="estado">
    <option value="<?=$_SESSION['estado'];?>"><?=$_SESSION['estado'];?></option> 
    <option value="Acre">Acre</option> 
    <option value="Alagoas">Alagoas</option> 
    <option value="Amazonas">Amazonas</option> 
    <option value="Amapá">Amapá</option> 
    <option value="Bahia">Bahia</option> 
    <option value="Ceará">Ceará</option> 
    <option value="Distrito Federal">Distrito Federal</option> 
    <option value="Espírito Santo">Espírito Santo</option> 
    <option value="Goiás">Goiás</option> 
    <option value="Maranhão">Maranhão</option> 
    <option value="Mato Grosso">Mato Grosso</option> 
    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option> 
    <option value="Minas Gerais">Minas Gerais</option> 
    <option value="Pará">Pará</option> 
    <option value="Paraíba">Paraíba</option> 
    <option value="Paraná">Paraná</option> 
    <option value="Pernambuco">Pernambuco</option> 
    <option value="Piauí">Piauí</option> 
    <option value="Rio de Janeiro">Rio de Janeiro</option> 
    <option value="Rio Grande do Norte">Rio Grande do Norte</option> 
    <option value="Rondônia">Rondônia</option> 
    <option value="Rio Grande do Sul">Rio Grande do Sul</option> 
    <option value="Roraima">Roraima</option> 
    <option value="Santa Catarina">Santa Catarina</option> 
    <option value="Sergipe">Sergipe</option> 
    <option value="São Paulo">São Paulo</option> 
    <option value="Tocantins">Tocantins</option> 
   </select>
   </td>
  </tr>
  <tr>
   <td>
    <label for="cidade">Cidade: </label>
   </td>
   <td align="left">
    <input type="text" name="cidade" value="<?=$_SESSION['cidade'];?>">
   </td>
  </tr>
  <tr>
   <td>
    <label for="cep">CEP: </label>
   </td>
   <td align="left">
    <input type="text" name="cep" size="9" maxlength="9" value="<?=$_SESSION['cep'];?>">
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
    <input type="text" name="email" value="<?=$_SESSION['email'];?>">
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
    <input type="password" name="passconfirm"><input type="hidden" name="tipo" value="comum"><input type="hidden" name="ativo" value="s">
   </td>
  </tr>
 </table>
</fieldset>
<br />
<input type="submit">
<input type="reset" value="Limpar">
</form>

 </body>
</html>