<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funciones_cadenas</title>
</head>
<body>
    <?php
    echo "<h4>1. Longitud de una cadena</h4>";
    //strlen(): obtiene la longitud de una cadena
    //devuelve el número de bytes de una cadena
    
    $nombre = "Sergio";
    $longitud = strlen($nombre);

    echo "<p>Nombre: $nombre</p>";
    echo "<p>Número de caracteres: $longitud</p>";

    echo "<h4>2. Transformar cadenas</h4>";
    //strtoupper() y strtolower() convierten una cadena a mayúsculas o minúsculas respectivamente
    $texto = "Hola Alumnado de DAM";
    echo "<p>Texto original: $texto</p>";
    echo "<p>Texto en mayúsculas: " . strtoupper($texto) . "</p>";
    echo "<p>Texto en minúsculas: " . strtolower($texto) . "</p>";

    echo "<h4>3. Sustituir texto</h4>";
    //str_replace(): Sustituir una parte de una cadena

    $frase = "Estoy estudiando Java";
    $nuevaFrase = str_replace("Java", "PHP", $frase);
    echo "<p>Frase original: $frase</p>";
    echo "<p>Frase modificada: $nuevaFrase</p>";

    echo "<h4>4. Extraer texto</h4>";
    //substr(): Extraer una parte de una cadena

    $texto = "Programación PHP";
    $parte = substr($texto, 0, 11);
    
    echo "<p>Texto original: $texto</p>";
    echo "<p>Texto extraído: $parte</p>";

    //El segundo argumento indica la posición inicial
    //Y el tercer argumento indica la longitud de cuantos bytes queremos extraer
    ?>
</body>
</html>