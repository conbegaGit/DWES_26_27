<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3>1. Contenido del array global \$_SERVER</h3>";
        echo "<pre>"; // conserva los saltos de línea y la identificación
       // print_r($_SERVER);
        echo "</pre>";
        // $_SERVER no siempre contiene las mismas claves
        // , es una buena realizar un print_r() para ver las variables que necesitas
        echo "Ruta dentro de htdocs:" . $_SERVER['PHP_SELF']."<br>";
        echo "Nombre del servidor:" . $_SERVER['SERVER_NAME']."<br>";
        echo "Software del servidor:" . $_SERVER['SERVER_SOFTWARE']."<br>";
        echo "Protocolo:" . $_SERVER['SERVER_PROTOCOL']."<br>";
        echo "Método de la petición:" . $_SERVER['REQUEST_METHOD']."<br>";

        /* 2. Como crear las variables globales con $_GLOBALS y global */
        echo "<h3>2. Contenido del array global \$_GLOBALS</h3>";
        // una manera es declarando primero la variable global
        global $contador;
        $contador = 10; // y asignando su valor, no entra en el array, solamente tienes que acceder a ella llamandola
        // O utilizando directamente el array
        /* donde | NOMBRE | = | VALOR ASIGNADO */
        $_GLOBALS['mensaje'] = "Este es mi primer mensaje";
        $_GLOBALS['numero'] = 50;

        echo "<pre>";
        print_r($_GLOBALS); // no poner un echo al lado de un print_r porque saca tambien el valor de si existe o no
        //echo $contador;
        echo "</pre>";
    ?>
</body>
</html>