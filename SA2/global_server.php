<?php
    echo "<h3>1. Contenido del array global \$_SERVER</h3>"; // la \ evita que se interprete $_SERVER como variable
    echo "<pre>"; // la etiqueta pre respeta los saltos de línea y espacios del print_r
    print_r($_SERVER); // muestra todo el contenido del array con sus claves y valores
    echo "</pre>";

    echo "Ruta dentro de htdocs: ". $_SERVER['PHP_SELF']."<br>"; // ruta del script que se está ejecutando
    echo "Nombre del servidor: ". $_SERVER['SERVER_NAME']."<br>"; // nombre del host, en local sale localhost
    echo "Software del servidor: ". $_SERVER['SERVER_SOFTWARE']."<br>"; // versión de Apache, PHP...
    echo "Protocolo: ". $_SERVER['SERVER_PROTOCOL']."<br>"; // protocolo usado, por ejemplo HTTP/1.1
    echo "Método de la petición: ". $_SERVER['REQUEST_METHOD']."<br>"; // GET o POST

    echo "2. Contenido del array global \$_GLOBALS</h3>";
    global $contador; // se declara la variable como global
    $contador = 10;

    $_GLOBALS['mensaje'] = "Este es mi primer mensaje"; // se añaden valores al array indicando la clave
    $_GLOBALS['numero'] = 50;

    echo "<pre>";
    print_r($_GLOBALS); // se muestran las claves y valores que hemos añadido
    echo "</pre>";
