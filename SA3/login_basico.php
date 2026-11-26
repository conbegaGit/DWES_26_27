<?php
   /*echo "Usuario introducido: " . $_POST["usuario"] . "<br>";
    echo "Contraseña introducida: " . $_POST["clave"] . "<br>";
    echo "Correo electrónico introducido: " . $_POST["text"] . "<br>";*/

    if (!isset($_POST["usuario"]) || !isset($_POST["clave"])) {
        echo "Error: debes introducir un usuario y una contraseña";
    } 
    elseif(empty($_POST["usuario"]) || empty($_POST["clave"])) {
        echo "Error: los campos son obligatorios";
    } 
    elseif(!filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL)) {
        echo "Error: el correo electrónico no es válido";
    } 
?>