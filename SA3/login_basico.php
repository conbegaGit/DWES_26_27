<?php
    echo "Usuario introducido: " . $_POST['usuario'] . "<br>";
    echo "Clave introducida: " . $_POST['clave'] . "<br>";
    echo "Correo introducido: " . $_POST['correo'] . "<br>";

    //Comprobamos que se han recibido los dos campos
    if (!isset($_POST["usuario"]) || !isset($_POST["clave"]) || !isset($_POST["correo"])) {
        echo "Error: denes introducir usuario, contraseña y correo.";
    }

    //Comprobemos que los campos no están vacíos
    elseif (empty($_POST["usuario"]) || empty($_POST["clave"]) || empty($_POST["correo"])) {
        echo "Error: los campos son obligatorios";
    }

    //FILTER_VALIDATE_EMAIL es una constante prdefinida de PHP que se utiliza
    //junto con la función filter_var() para comprobar si una cadena tiene un formato
    //válido de correo electrónico.
    elseif (!filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL)) {
        echo "Error: el correo electrónico no tiene un formato válido."
    }