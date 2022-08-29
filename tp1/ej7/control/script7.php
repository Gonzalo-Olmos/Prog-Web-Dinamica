<?php

if ($_GET) {
    
    $num1 = $_GET['number1'];
    $num2 = $_GET['number2'];
    $opcion = $_GET['select'];

        echo $num1." y ". $num2. " <br>";

        if ($opcion == "+"){
            #suma
            $res= $num1 + $num2;
            echo "SUMA: ".$res;

        }elseif ($opcion == "-") {
            #resta
            $res= $num1 - $num2;
            echo "RESTA: ".$res;

        }else {
            # multiplicación
            $res= $num1 * $num2;
            echo "MULTIPLICACION: ".$res;

        }


}else {
    echo "NO se recibieron datos";
}
