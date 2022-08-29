<?php

if ($_POST) {
   
    $edad = $_POST['edad'];
    $esEstudiante = $_POST['selectEst']; 

    //echo $edad." ".$esEstudiante." <br>";

    calcularTarifa($edad, $esEstudiante);

    echo" <br> <a href='../vista/formulario8.php'>Volver a consultar</a>";
}else {
    echo"NO se recibieron datos";
}



function calcularTarifa($edad, $esEstudiante){

    

    if ($esEstudiante=="true") {
        
        if ($edad>=12) {
            # tarifa $180
            echo"Su tarifa es de $180";
        }else {
            # tarifa $160  es menor de 12
            echo"Su tarifa es de $160";
        }

    }elseif($edad<12) {
        # tarifa $160  es menor de 12
        echo"Su tarifa es de $160";
    }else{
         # cualquier otro caso la tarifa es de $300
         echo"Su tarifa es de $300";
    }



}




?>