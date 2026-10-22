<?php
/* 1. Información sobre la variable super global $_SERVER */
echo "<h3>1. Contenido del array global \$_SERVER</h3>";
echo "<pre>"; // conserva los saltos de linea y la indentación.
print_r($_SERVER);
echo "</pre>";

echo "<b>Ruta dentro del htdocs: </b>" . $_SERVER['PHP_SELF'] . "<br>";
echo "<b>Nombre del servidor: </b>" . $_SERVER['SERVER_NAME'] . "<br>";
echo "<b>Software del servidor: </b>" . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "<b>Protocolo: </b>" . $_SERVER['SERVER_PROTOCOL'] . "<br>";
echo "<b>Método de la petición: </b>" . $_SERVER['REQUEST_METHOD'] . "<br>";

/* 2. Cómo crear variables globales con $_GLOBALS y global */
echo "<h3>2. Contenido del array global \$_GLOBALS</h3>";

global $mensaje;
$mensaje = "Este es mi primer mensaje";
global $contador;
$contador = 10;

echo "<pre>";
print($mensaje . "<br>");
print($contador);
echo "</pre>";

$_GLOBALS['mensaje'] = "Este es mi primer mensaje";
$_GLOBALS['numero'] = 50;

echo "<pre>";
print_r($_GLOBALS);
echo "</pre>";