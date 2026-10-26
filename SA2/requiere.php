<?php
// La palabra once significa que PHP comprueba si ese archivo ya se ha incluido
// durante la ejecuccion y, si es asi, evita volver a ejecutarlo. Esto es util para evitar errores de redefinicion de funciones, clases o variables.
$a = "variable \$a del principal";
require "fichero_requerido.php";
//require_once "fichero_requerido.php"; // Esto no se ejecuta porque ya se ha incluido el fichero requerido.php
$b = "variable \$b del principal";
echo  "En el script principal";

// Cuantas veces se hara el saludo?
include "saludo.php";
requiere "saludo.php"; // Esto se ejecuta porque require no tiene la palabra once, por lo que se ejecuta de nuevo el saludo.php
include_once "saludo.php"; // Esto no se ejecuta porque ya se ha incluido el fichero saludo.php
include_once "saludo.php"; // Esto no se ejecuta porque ya se ha incluido el fichero saludo.php
?>