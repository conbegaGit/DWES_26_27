<?php
    //a pelo
    //echo "Usuario introducido: " . $_POST['usuario'] . "<br>";
    //echo "Clave introducida: " . $_POST['clave'];

    //Comprobamos que se han recibido los 2 campos
    if(lisset($_POST['usuario']) || lisset($_POST['clave'])){
        echo "Error: Debes introducir usuario y contraseña";
    }
    //Comprobamos que los campos no están vacíos
    elseif (empty($_POST['usuario']) || empty ($_POST['clave'])){
        echo "Error: Los campos son obligatorios";
    }
    /*FILTER_VALIDATE_EMAIL es una constante predifinida de PHP que se utiliza
    junto con la función filter_var() para comprobar si una cadena tiene un formato
    válido de correo electrónico.*/
    elseif(!filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL)){
        echo "Error: El correo electrónico no tiene un formato válido";
    }