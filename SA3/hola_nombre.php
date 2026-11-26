<?php
// http://localhost:3000/SA3/hola_nombre.php?nombre=Marcos
// en el propio enlace se le da el nombre, con get lo coge

if (empty($_GET["nombre"])) {
    echo "Error, falta el parámetro nombre";
} else {
    echo "Hola, " . $_GET["nombre"];
}

?>