<?php


if ($_POST) {
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $direccion = $_POST['dir'];
    $sexo= $_POST['select'];
    $estudios1 = $_POST['radiobutton1'];
    $estudios2 = $_POST['radiobutton2'];
    $estudios3 = $_POST['radiobutton3'];

        if ($estudios1) {
            # code...
            $estudios =  " No tiene estudios ";
        }elseif ($estudios2) {
            # code...
            $estudios =  " Estudios Primarios";

        }else {
            # code...
            $estudios =  "Estudios Secundarios";
        }



        if ($edad > 18) {
            
            //redirecciono a otro script
            
            header('Location: '."mostrarMay_form3.php");

    }



    echo "Hola soy ".$nombre." ".$apellido." tengo ".$edad." años, vivo en ".$direccion;
    echo " \n  sexo: ".$sexo." \n estudios: ".$estudios;

}else {
    echo"no se recibieron datos";
}



?>