


function validacion(idPass, idUser)
 {
    
    var objPass;
    var objUser;
    var expReg_Password;

    objPass = document.getElementById(idPass);
    objUser = document.getElementById(idUser);

    password = objPass.value;
    userName=  objUser.value;

    expReg_Password = /^(?=\w*\d)(?=\w*[a-z])\S{8,}$/;

    //console.log(expReg_Password.test(pass));

    if (password == userName) {
        //la contraseña no puede ser igual que el nombre de usuario ingresado
        objPass.style.borderColor="red";

    }if(!expReg_Password.test(password)) {
        //la contraseña debe tener al menos 8 caracteres
        //la contraseña debe contener letras y numeros
        objPass.style.borderColor="red";
        alert("La contraseña debe contener al menos 8 caracteres, un numero y una letra");
    }
    
    
    
    
    
    

   

  
}