<?php

# La palabra once significa que PHP comprueba si ese archivo ya se ha incluido
# durante la ejecución y, si es así, evita volver a ejecutarlo.
$a = " variable \$a del principal ";
require "fichero_requerido.php"; # Esta línea provoca un warning: el require intenta acceder a la variable $b que aún no se ha inicializado
# require_once "fichero_requerido.php";
$b = " otra variable \$b del principal "; 
echo "En el script principal<br>";

# 
include "saludo.php"; # Primera ejecución, no importaría que tenga once, se va a ejecutar
require "saludo.php"; # Segunda ejecución, no tiene once por lo cual se lleva a cabo
include_once "saludo.php"; # Tiene once y el archivo ya se ha incluido, por lo que no se vuelve a ejecutar
require_once "saludo.php"; # Lo mismo que la línea anterior

?>