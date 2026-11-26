<?php
    // http://localhost:3000/SA3/hola_nombre.php?nombre="nacho"

    // a pelo
    echo "Hola " . $_GET["nombre"];
    echo "<br>";
    // comprobando si han pasado parámetros
    // isnull($GET["nombre"])

    if (empty($_GET["nombre"])){
        echo "Error, falta el parámetro nombre";
    }
    else {
        echo "Hola " . $_GET["nombre"];
    }

