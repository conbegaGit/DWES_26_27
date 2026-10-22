<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Hola Mundo</title>
    </head>
    <body>
        <?php
        // 1. Información sobre la variable super global $_SERVER
        echo "<h3>1. Contenido del array global \$_SERVER</h3>";
        echo "<pre>"; //Conserva los saltos de linea y la indentación
        print_r($_SERVER); //Muestra el contenido del array
        
        //OJO!! $_SERVER no contiene siempre las mismas claves. Depende del servidor y de la configuración del mismo. Por ejemplo, en mi servidor local no tengo la clave "HTTP_USER_AGENT" pero en el servidor web.
        //de la petición y de la configuración de php. Por eso, antes de acceder a ima cllaver habria que
        //hacer un print_r($_SERVER) para asegurarnos
        echo "Ruta dentro de htdocs: ".$_SERVER['PHP_SELF'].'<br>';
        echo "Nombre del servidor: ".$_SERVER['SERVER_NAME']. '<br>';
        echo "Software del servidor: ".$_SERVER['SERVER_SOFTWARE'] .'<br>';
        echo "Protocolo: ".$_SERVER['SERVER_PROTOCOL'].'<br>';
        echo "Metodo de la petición: ".$_SERVER['REQUEST_METHOD'].'<br>';

        //2. Como crear variables globales con $_GLOBALS y global
        echo "<h3>2. Contenido del array global \$_GLOBALS</h3>";
        //aqui crea primero la variable y luego le asigna el valor usando global así que si imprimo el array no va imprimir esta variable
        global $contador;
        $contador = 10;

        //aqui crea la variable y le asigna el valor en la misma linea
        $_GLOBALS['mensaje'] = "Este es mi primer mensaje";
        $GLOBALS['numero'] = 50;

        echo "<pre>";
        print_r($GLOBALS);
        echo "</pre>";
        ?>
    </body>
</html>