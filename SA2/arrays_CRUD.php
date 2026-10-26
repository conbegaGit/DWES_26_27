<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays_CRUD</title>
</head>
<body>
    <?php
    echo "<h4>1. Crear un array</h4>";

    //existen dos formas de crear un array en PHP. Nosotros usaremos la forma de corchetes, que es la más moderna y recomendada.
    $frutas = ["manzana", "pera", "plátano"]; //la clave es la posición del elemento en el array, que empieza en 0 y el valor es el contenido del elemento.
    //$frutas = array("manzana", "pera", "plátano"); es la forma antigua
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    echo "<h4>2. Consultar un elemento</h4>";
    echo "La fruta en la posición \$frutas[0] es: ".$frutas[0]."<br>";
    ?>
</body>
</html>