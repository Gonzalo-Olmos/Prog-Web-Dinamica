<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form3</title>
</head>
<body>

    <form action="mostrar_form3.php" method="post">

        <h3>Nombre:</h3> 
        <input name="nombre" id="nombre" type="text" > <br>
        <h3>Apellido:</h3>
        <input name="apellido" id="apellido" type="text" > <br>
        <h3>Edad;</h3>
        <input name="edad" id="edad" type="text" > <br>
        <h3>Direccion:</h3>
        <input name="dir" id="dir" type="text" > <br>

        

        <h5> 1- No tiene estudios</h5> <br>
        <input name="radiobutton1" id="radiobutton1" type="radio" > 
        <h5> 2- Estudios Primarios</h5> <br>
        <input name="radiobutton2" id="radiobutton2" type="radio" > 
        <h5> 3- Estudios Secundarios</h5> <br>
        <input name="radiobutton3" id="radiobutton3" type="radio" > 

        <br>
        
        <h5> Sexo</h5>

        <select name="select" id="select">
        <option name="fem" id="fem" value="Femenino">Femenino</option>
        <option name="mas" id="mas" value="Masculino" selected> Masculino</option>
        </select>
        
        <br>
        <br>
        <input name="enviar" id="enviar" type="submit" value="Enviar">






    </form>
    
</body>
</html>