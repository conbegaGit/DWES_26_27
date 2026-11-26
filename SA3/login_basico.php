<?php
    echo "Usuario introducido: " . $_POST['usuario']."<br>";
    echo "Clave introducida: " . $_POST['clave']."<br>";


    // comprobamos que se han recibido los dos campos
    if (!isset($_POST['usuario']) || !isset($_POST['clave'])) {
    echo "Error: debes introducir usuario y contraseña.";
    }

    // Segundo if: comprobar que no estén vacíos
    elseif (empty($_POST["usuario"]) || empty($_POST["clave"])) {
        echo "Error: tienes que rellenar todos los campos.";
    }

    // Tercer if: comprobar que el correo es válido
    //FILTER_VALIDATE_EMAIL constante de php con filter_var() para comprovar  
   elseif (!filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL)) {
        echo "Error: el correo no es válido.";
   }

