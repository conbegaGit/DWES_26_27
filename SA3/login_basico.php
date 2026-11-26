<?php
    //A pelo
    echo "Usuario introducido: " . $_POST['usuario'] . "<br>";
    echo "Clave introducida: " . $_POST['clave'] . "<br>";

    // Comprobamos que se han recibido los dos campos
    if (!isset($_POST["usuario"]) || !isset($_POST["clave"])){
        echo "Error: debes introducir usurio y contraseña.";
    }
    // Comprobamos que los campos no están vacíos
    elseif (empty($_POST["usuario"]) || empty($_POST["clave"])){
        echo "Error: los campos son obligatorios.";
    }
    // FILTER_VALIDATE_EMAIL es una constante predefinida de PHP que se utiliza
    // junto con la función filter_var() para comprobar si una cadena tiene un formato
    // válido de correo electrónico
    elseif (!filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL)){
        echo "Error: el correo electrónico no tiene un formato válido.";
    }
   
    // Comprobamos las credenciales
    /*elseif ($_POST["usuario"] === "alumno" && $_POST["clave"] === "dam2026"){
        echo "<h2>Bienvenido al área privada del centro</h2>";

    }*/


