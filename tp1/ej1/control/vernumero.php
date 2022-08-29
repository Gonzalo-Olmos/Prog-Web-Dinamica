<?php


if($_GET){

    $numero = $_GET['numero'];
    

    if (!(is_numeric($numero))) {

        echo "error, el dato no es un numero";
    
    }else{

        funPedida($numero);
    }
       
    
}else{

    echo "No se recibieron datos";
}


function funPedida($numero){

    if ($numero == 0) {
        echo "el numero es 0";
}elseif( $numero > 0){
    echo "el numero es positivo";

}else{
    echo "el numero es negativo";
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Numero</title>
</head>
<body>
    
    <a href="formulario1.php"> Volver</a>

</body>
</html>





