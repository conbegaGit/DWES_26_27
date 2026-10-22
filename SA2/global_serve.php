<?php
    echo "<h3>1. Contenido del array global \$_SERVER</h3>";
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";


    echo "Ruta dentro de htdocs: ". $_SERVER['PHP_SELF'];
    echo "Nombre del servidor: ". $_SERVER['SERVER_NAME'];
    echo "Software del servidor: ". $_SERVER['SERVER_SOFTWARE'];
    echo "Protocolo: ". $_SERVER['SERVER_PROTOCOL'];
    echo "Método de la petición: ". $_SERVER['REQUEST_METHOD'];


    echo "<h3>2. Contenido del array global \$_GLOBALS</h3>";


    $GLOBALS['contador'] = 10;

    $GLOBALS['mensaje'] = "Este es mi primer mensaje";
    $GLOBALS['numero'] = 50;

    echo "<pre>";
    print_r($GLOBALS);
    echo "</pre>";