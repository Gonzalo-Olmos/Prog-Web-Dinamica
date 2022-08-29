<?php



if($_GET){

    $lunes = $_GET['hslunes'];
    $martes = $_GET['hsmartes'];
    $miercoles = $_GET['hsmiercoles'];
    $jueves = $_GET['hsjueves'];
    $viernes = $_GET['hsviernes'];


    //asumo la verificacion en html y js
    
    $array= array($lunes,$martes, $miercoles,$jueves, $viernes);
    
    $sumaTotal = $lunes+$martes+ $miercoles+$jueves+ $viernes;

    echo "total hotas: ".$sumaTotal;
}else {
    
    echo"no se recibieron datos";
}



?>



















