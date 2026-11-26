<?php
    echo "Hola " . $_GET["nombre"]; 
    // comprobar si han pasado los parámetros
    // insult(&_GET["nombre"])
    echo"<p></p>";
    if(empty($_GET["nombre"])){
        echo"Error, falta el parámetro nombre";
    }else{
        echo "Hola " . $_GET["nombre"];
    }