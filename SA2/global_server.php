<?php
    //Información sobre la variable super globañ $_SERVER
    echo "<h3>1. Contenido del array global \$_SERVER</h3>";
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";
    // conserva los saltos de línea y la oindentación, así es 

    // OJO!! $_SERVER no contiuene siempre las mismas claves. Depende del servidor web,
    //de la petrición y de la configuración de PHP. Por eso, antes de acceder a una clave sería un
    //hacer un print_r($_SERVER) para asegurarnos,
    echo "Ruta dentro de htdocs: ". $_SERVER[ 'PHP_SELF'];
    echo "Nombre del servidor: ". $_SERVER['SERVER_NAME'];
    echo "Software del servidor: ". $_SERVER[ 'SERVER_SOFTWARE'];
    echo "Protocolo: ". $_SERVER['SERVER_PROTOCOL'];
    echo "Método de la petición: ". $_SERVER[ 'REQUEST_METHOD'];

    // 2 Cómo crear variables globales con $_GLOBALS y global
    echo "<h3>2. Contenido del array global \$_GLOBALS</h3>";

    global $contador;
    $contador = 10;

    global $mensaje;
    $mensaje = "Este es mi primer mensaje";

    $_GLOBALS['mensaje'] = "Este es mi primer mensaje";
    $_GLOBALS['numero'] = 50;

    echo "<pre>";
    print_r($_GLOBALS);
    echo "</pre>";



   