<?php
    //http://localhost:3000/SA3/hola_nombre.php?nombre=Javi
    echo "Hola, " . $_GET["nombre"];

    // comprobando si han pasado los parametros por la URL
    // isnull($_GET["nombre"])

    if (empty($_GET["nombre"])) {
        echo "Error, falta el parametro nombre";
    } else {
        echo "Hola, " . $_GET["nombre"];
    }
?>