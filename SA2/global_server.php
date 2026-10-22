<?php

    // 1. Información sobre la variable superglobal $_SERVER
    // Las variables superglobales son un tipo de variables predefinidas en PHP.
    // Son arrays muy relevantes para el desarrollo de aplicaciones web
    echo "<h3>1. Contenido del array global \$_SERVER</h3>";
    echo "<pre>"; //Conserva saltos de línea e indentación
    print_r($_SERVER); // Muestra todos los contenidos de la variable superglobal $_SERVER
    echo "</pre>";

    // Mostrar variables dentro de la variable superglobal $_SERVER
    echo "Ruta dentro de htdocs: ". $_SERVER['PHP_SELF'] . "<br>";
    echo "Nombre del servidor: ". $_SERVER['SERVER_NAME'] . "<br>";
    echo "Software del servidor: ". $_SERVER['SERVER_SOFTWARE'] . "<br>";
    echo "Protocolo: ". $_SERVER['SERVER_PROTOCOL'] . "<br>";
    echo "Método de la petición: ". $_SERVER['REQUEST_METHOD'] . "<br>";

    // Creación de variables dentro de la variable superglobal $_GLOBALS (Contiene variables globales d
    echo "<h3> Contenido del array GLOBALS<br></h3>";
    
    // Existen dos formas de crear una variable global
    // 1. Definirla con "global" delante y luego introducir el valor. No están dentro del array $_GLOBALS
    global $contador;
    $contador = 10;

    global $mensaje;
    $mensaje = "Este es mi primer mensaje";

    // 2. Crearlas directamente dentro del array
    $_GLOBALS['mensaje'] = "Este es mi primer mensaje";
    $_GLOBALS['numero'] = 50;

    echo "<pre>";
    print_r($_GLOBALS); # Muestra mensaje y número, que son las variables almacenadas en el array
    echo "</pre>";
?>