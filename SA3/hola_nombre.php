<?php  
    // http://localhost:3000/DWES_26_27/SA3/hola_nombre.php?nombre="Adrian"

    // a pelo

    if (empty($_GET["nombre"])) {
        echo "Error, falta el parámetro nombre";
    } else {
        echo "Hola ".$_GET["nombre"]." bienvenido al ".$_GET["partido"];
    }