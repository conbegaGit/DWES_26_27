<?php
    echo "<h3>1.Contendio del array globla \$_SERVER</h3>";
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

    echo "Ruta dentro de htdocs: " . $_SERVER['PHP_SELF'] . "<br>";
    echo "Nombre del script: " . $_SERVER['SCRIPT_NAME'] . "<br>";
    echo "Software del servidor: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
    echo "Protocolo: " . $_SERVER['SERVER_PROTOCOL'] . "<br>";
    echo "Metodo de petición: " . $_SERVER['REQUEST_METHOD'] . "<br>";

    echo "<h3>2. Contenido del array global \$_GET</h3>";

    global $contador;
    $contador = 10;

    global $mensaje;
    $mensaje = "Este es el primer mensaje";

    $_GLOBALS['mensaje'] = "Este es el segundo mensaje";
    $_GLOBALS['numero'] = 20;

    echo "<pre>";
    print_r($_GLOBALS);
    echo "</pre>";
?>