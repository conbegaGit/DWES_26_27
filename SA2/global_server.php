<?php
/* 1. Información sobre la variable super global $_SERVER */
echo "<h3>1. Contenido del array global \$_SERVER</h3>";
echo "<pre>"; // conserva los saltos de linea y la indentación.
print_r($_SERVER);
echo "</pre>";

// $_SERVER no siempre contiene las mismas claves (depende del servidor),
// por eso conviene hacer antes un print_r() para ver cuáles hay disponibles.
echo "<b>Ruta dentro del htdocs: </b>" . $_SERVER['PHP_SELF'] . "<br>";
echo "<b>Nombre del servidor: </b>" . $_SERVER['SERVER_NAME'] . "<br>";
echo "<b>Software del servidor: </b>" . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "<b>Protocolo: </b>" . $_SERVER['SERVER_PROTOCOL'] . "<br>";
echo "<b>Método de la petición: </b>" . $_SERVER['REQUEST_METHOD'] . "<br>";

/* 2. Cómo crear variables globales con $GLOBALS y global */
echo "<h3>2. Variables globales: \$GLOBALS y global</h3>";
// OJO: el array superglobal se llama $GLOBALS (sin guion bajo).
// $_GLOBALS no existe en PHP: sería un array normal con ese nombre.

// Forma 1: declarar la variable fuera de cualquier función (ya es global)
$mensaje = "Este es mi primer mensaje";
$contador = 10;

// Dentro de una función, las variables de fuera NO se ven,
// salvo que se declaren con la palabra global.
function mostrarGlobales() {
    global $mensaje, $contador;
    echo "Desde la función: $mensaje - $contador<br>";
}
mostrarGlobales();

// Forma 2: usar directamente el array $GLOBALS  ->  $GLOBALS['NOMBRE'] = VALOR
$GLOBALS['numero'] = 50;
echo "Variable creada con \$GLOBALS: $numero<br>";

echo "<pre>";
// No pongas echo delante de print_r: print_r ya imprime, y echo mostraría además su valor de retorno.
print_r([
    'mensaje' => $GLOBALS['mensaje'],
    'contador' => $GLOBALS['contador'],
    'numero' => $GLOBALS['numero'],
]);
echo "</pre>";
