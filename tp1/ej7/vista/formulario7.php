<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario7</title>
</head>
<body>

        <form action="../control/script7.php" method="GET">  

        <input name="number1" id="number1" type="number"> <br>
        <input name="number2" id="number2" type="number"> <br>

        <select name="select" id="select"> <br>

                <option name="suma" id="suma" value="+">SUMA</option>
                <option name="resta" id="resta" value="-">RESTA</option>
                <option name="mult" id="mult" value="*">MULTIPLICACION</option>

        </select>

        <input type="submit" value="Enviar">

        </form>

       
    
</body>
</html>