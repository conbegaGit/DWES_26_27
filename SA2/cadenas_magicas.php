<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $var = "Paco";
        $a = "Hola $var <br>"; // en este ejemplo si que pilla la variable correctamente.
        $b = 'Hola $var'; // no pilla la variable, pilla $var en vez del contenido de la variable
        echo $a;
        echo $b;
    ?>
</body>
</html>