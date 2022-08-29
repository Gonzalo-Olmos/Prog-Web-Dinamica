<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="../control/validarPass.js">
    // librería de funciones que son utilizadas en varias páginas
    </script>

    <title>Login</title>
</head>
<body>
    
<h3>Member login</h3>

<form action="../control/verificaPass.php" method="post"> 


<input name="user" id="user" type="text" required>
<br> <br>
<input name="pass" id="pass" type="password" required>

<input name="login" id="login" value="Login" type="submit" onclick="validacion('pass','user')"/>

</form>



</body>
</html>