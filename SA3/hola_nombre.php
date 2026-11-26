<?php

// http://localhost:3000/SA3/hola_nombre.php?nombre="Consu"

// echo "Hola " . $_GET["nombre"];

if (empty($_GET["nombre"])) {
    echo "ERROR: Falta el parámetro GET nombre";
} else {
    echo "Hola " . $_GET["nombre"];
}


?>