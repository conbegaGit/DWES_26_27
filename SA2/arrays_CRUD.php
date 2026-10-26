<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h4> 1. Crear un array</h4>";

        // existen 2 formas de crear un array
        $fruta = ["manzana", "pera", "platano"];

        $frutas = array("manzana", "pera", "platano");

        echo "<pre>";
        print_r($frutas);
        echo "</pre>";

        echo "<h4>2. Consultar un elemento</h4>";

        echo "La fruta en la posición \$frutas[0] es: $frutas[0].<br>"
    ?>
</body>
</html>