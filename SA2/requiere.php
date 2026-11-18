<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // La palabra once significa que PHP comprueba si ese archivo se ha incluido
        // duarante la ejecución y, si es así, evita volver a ejecutarlo.
        $a = "variable \$a del principal";
        require "requerido.php"; // da error, solo con la b, porque el archivo es sincrono necesitas declarar antes las variables que necesites utilizar
        // require_once "requerido.php"
        $b = "otra variable \$b del principal";
        echo "En el script principal<br>";

        // ¿Cuantas veces se hará el saludo? 2 veces, una para el include y otra para el require, los once detectan que ya se ha utilizado el saludo anterorimente y no lo vuelve a ejecutar
        include "saludo.php";
        require "saludo.php";
        include_once "saludo.php";
        require_once "saludo.php";
    ?>
</body>
</html>