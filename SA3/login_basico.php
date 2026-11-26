<?php
    echo "Usuario introducido: " . $_POST['usuario'];
    echo"<br/>";
    echo "Clave introducida: " . $_POST['clave'];
    echo"<br/>";

    if(!isset($_POST["usuario"])|| !isset($_POST["clave"])){
        echo"Error: debes debes introducir usuario y contraseña";
        echo"<br/>";
    }
    
    elseif(empty($_POST["usuario"])|| empty($_POST["clave"])){
        echo "Error: los campos son obligatorios";
        echo"<br/>";
    }
    elseif(!filter_var($_POST["correo"],FILTER_VALIDATE_EMAIL)){
        echo "Error: el correo electrónico no tiene un formato válido";
    }