<?php

    echo"<h3>Contenido del array global \$_SERVER</h3>";
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

    
    echo "Ruta dentro de htdocs: ". $_SERVER[ 'P HP_SELF'];
    echo "Nombre del servidor: ". $_SERVER['SERVER_NAME'];
    echo "Software del servidor: ". $_SERVER[ 'SERVER_SOFTWARE'];
    echo "Protocolo: ". $_SERVER['SERVER_PROTOCOL'];
    echo "Método de la petición: ". $_SERVER[ 'REQUEST_METHOD']; 

    /*2. Como crear variables globales con $_Globals y global*/
    echo"<h3>2. Conteniodo del arrayglobal \$_GLOBALS</h3>";

    global $contador;
    $contador = 10;

    $_GLOBALS['mensaje'] = "Este es mi primer mensaje global";
    $_GLOBALS["numero"] = "50";

    echo "<pre>";
    print_r($_GLOBALS);
    echo"</pre>";

    ?>