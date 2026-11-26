<?php
    //http://localhost:3000/SA3/hola_nombre.php?nombre="Edwin"

    echo "Hola " .$_GET["nombre"];

    //Comporbando si han pasado los parámetros
    //isnull($_GET["nombre"])

    if(empty($_GET["nombre"])){
        echo "Error. Falta el parámetro nombre";
    }else{
        echo "Hola ".$_GET["nombre"];
    }
?>