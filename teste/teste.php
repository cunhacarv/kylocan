<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
    var senha = document.forms["myForm"]["senha"].value;
    var passconfirm = document.forms["myForm"]["passconfirm"].value;
    if (senha != passconfirm) {
        alert("Senha não confere!!!");
        return false;
    }
}
</script>
</head>
<body>

<form name="myForm" action="formulario.html"
onsubmit="return validateForm()" method="post">
Name: <input type="text" name="senha">
Confirmar senha: <input type="password" name="passconfirm">
<input type="submit" value="Submit">
</form>

</body>
</html>
