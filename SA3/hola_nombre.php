<?php
    // http://localhost:3000/SA3/hola_nombre.php?nombre=hejun

    // echo "Hola " . $_GET["nombre"];

    // comprovar si han pasado los parametros
    // isnull($_GET^["nombre"])

    if(empty($_GET["nombre"])){
        echo "Error, falta el paramentro nombre";
    } else{
        echo "Hola " . $_GET["nombre"];
    }
