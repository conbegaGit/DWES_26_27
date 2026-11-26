<?php

// Con post se obtienen las variables introducidas en formularios
// echo "Usuario introducido: " . $_POST["usuario"] . "<br>";
// echo "Clave introducida: " . $_POST["clave"] . "<br>";
// echo "Correo introducido: " . $_POST["correo"];

// COMPROBACIONES DE LOS CAMPOS
if (!isset($_POST["usuario"]) || !isset($_POST["clave"])) {
    // Se comprueba que se han recibido datos en ciertos campos   
    echo "ERROR: debes introducir usuario y contraseña.";
} elseif (empty($_POST["usuario"]) || empty($_POST["clave"])) {
    // Se comprueba que no estén vacíos los campos   
    echo "ERROR: los campos son obligatorios";
} elseif (!filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL)) {
    // FILTER_VALIDATE_EMAIL es una constante de PHP que se utiliza para
    // comprobar si una cadena tieneun formato válido de correo electrónico 
    echo "ERROR: el correo electrónico no tiene un formato válido.";
}
?>