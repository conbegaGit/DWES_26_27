<?php
// La palabra once significa que php comprueba si ese archivo ya se ha incluido antes, si es así no lo vuelve a incluir. Esto es útil para evitar errores de redefinición de funciones o clases.
// durante la ejecución y, si es así, avita volver a ejecutarlo
$a = "variable \$a delprincipal";
require "fichero_requerido.php";
//require_once "fichero_requirido.php";
$b = "otra variable \$b del principal";

echo "En el script principal<br>";
//¿Cuantas veces se hará el saludo?
include "saludo.php";
require "saludo.php";
include_once "saludo.php";
require_once "saludo.php";