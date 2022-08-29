<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinem@s</title>
</head>
<body>
    
    <form action="../control/script8.php" method="POST">

    <h1>Calcular Tarifa de Entrada</h1>
    
    <p>Edad:</p>
    <input name="edad" id="edad" type="number" required>

    <p>Estudiante (si/no):</p> 

    <select name="selectEst" id="selectEst"> 
    <option value="true">SI</option>
    <option value="false">NO</option>
    </select>

    <br><br><br>

    <input name="calcular" id="calcular" type="submit" value="calcular">

    </form>

    

</body>
</html>