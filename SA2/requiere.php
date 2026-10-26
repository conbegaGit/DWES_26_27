<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>requiere</title>
</head>
<body>
    <?php
    //La palabra once significa que PHP comprobará si el archivo ya ha sido incluido
    //duranter la ejecución y, si es así, evita volver a ejecutarlo
    $a = "Variable \$a del principal";
    require "requerido.php"; //da warning en b porque se ha puesto el require antes de declarar la variable $b
    //require_once "requerido.php";
    $b = "Otra variable \$b del principal";
    echo "En el script principal";
    //¿Cuantas veces hará el saludo?
    include "saludo.php";
    require "saludo.php";
    include_once "saludo.php";
    require_once "saludo.php";
    ?>
</body>
</html>