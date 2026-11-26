<?php
    //http://localhost:3000/DWES_26_27/SA3/hola_nombre.php?nombre="Manu"

    //a pelo
    echo "Hola " . $_GET["nombre"];

    //Comprobando si han pasado los parámetros
    //isnull($_GET["nombre])

    if (empty($_GET["nombre"])) {
        echo "Error, falta el parámetro nombre";
    } else {
        echo "Hola " . $_GET["nombre"];
    }