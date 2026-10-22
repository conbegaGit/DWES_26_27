<?php
echo "<h3>1. Contenido del array global \$_SERVER</h3>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo "Ruta dentro de htdocs: ".$_SERVER['PHP_SELF']."<br>";
echo "Nombre del servidor: ".$_SERVER['SERVER_NAME']."<br>";
echo "Software del servidor: ".$_SERVER['SERVER_SOFTWARE']."<br>";
echo "Protocolo: ".$_SERVER['SERVER_PROTOCOL']."<br>";
echo "Método de petición: ".$_SERVER['REQUEST_METHOD']."<br>";

echo "<h3>2. Contenido del array global \$_GLOBALS</h3>";

//Crear una variable por separado no la añade al array global $GLOBALS, para ello hay que declararla como global
global $mensaje;
$mensaje = "Este es mi primer mensaje";

$GLOBALS["mensaje"] = "Este es mi primer mensaje";
$GLOBALS["numero"] = 50;

echo "<pre>";
print_r($GLOBALS);
echo "</pre>";
?>