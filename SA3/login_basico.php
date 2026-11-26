<?php
    //echo "Usuario introducido: " . $_POST['usuario']. "<br>";
    //echo "Clave introducida: " . $_POST['clave'];

    // Comprobamos que se han recibidos los campos
    if (!isset($_POST["usuario"]) || !isset($_POST["clave"])) {
        echo "ERROR: Debes introducir usuario y contraseña";

    // Comprobamos que los campos no esten vacios
    } elseif (empty($_POST["usuario"]) || empty($_POST["clave"])) {
        echo "ERROR: Los campos son obligatorios";

    // FILTER_VALALIDATE_EMAIL es una constante predefinida de PHP
    // que se utiliza junto con la función filter_var() para comprobar si una cadena tiene un formato válido
    // de correo electronico
    } elseif (!filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL)) {
        echo "ERROR: El correo electronico no tiene un formato valido";
    }

    


    
?>