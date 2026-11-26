<?php
    // http://localhost:3000/SA3/hola_nombre.php?nombre="Afia"

    // a pelo
    echo "Hola ". $_GET["nombre"];

    
    // comprobando si han pasado los parámetros
    // isnull($_GET["nombre"])

    if (empty($_GET["nombre"])) {
        echo "Error, falta el parámetro nombre"; 
    } else {
        echo "Hola " . $_GET["nombre"];
    }
    

?>

