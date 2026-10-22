<?php
/* 1.Informacion sobre la variable superglobal $_SERVER */
echo "<h3>1. Contenido del array global \$_SERVER</h3>";
echo "<pre>"; // Conserva los saltos de linea y la indentacion
print_r($_SERVER); // Muestra el contenido del array $_SERVER
echo "</pre>";

//OJO! $_SERVER no contiene siempre la misma informacion, depende del servidor y de la configuracion de PHP
// Por eso, antes de acceder a una clave seria hacer un print_r($_SERVER) para asegurarme.
echo "Ruta dentro de htdocs: " . $_SERVER['PHP_SELF'] . "<br>";
echo "Nombre del servidor: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Software del servidor: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "Protocolo: " . $_SERVER['SERVER_PROTOCOL'] . "<br>";
echo "Metodo de peticion: " . $_SERVER['REQUEST_METHOD'];

// 2. Como crear variablesglobales con $_GLOBALS y global
echo "<h3>2. Contenido del array global \$_GLOBALS </h3>";

global $contador;
$contador = 10; // Variable global

$_GLOBALS['mensaje'] = "Este es mi primer mensaje"; // Variable global
$_GLOBALS['numero'] = 5; // Variable global

echo "<pre>";
print_r($GLOBALS); // Muestra el contenido del array $_GLOBALS
echo "</pre>";
?>

