<?php

    echo "<h4>1. Longitud de una cadena</h4>";

    //strlen(): Obtener la longitud de una cadena

    $nombre = "Nacho";

    $longitud = strlen($nombre);

    echo "<p>Nombre: $nombre</p>";
    echo "<p>Número de caracteres: $longitud</p>";

    echo "<h4>2. Transformar cadenas</h4>";

    //strtoupper(): Convertir una cadena a mayúsculas
    //strtolower(): Convertir una cadena a minúsculas

    $texto = "Hola alumno de DAM";

    echo "<p>Texto original: $texto</p>";
    echo "<p>Texto en mayúsculas: ".strtoupper($texto)."</p>";
    echo "<p>Texto en minúsculas: ".strtolower($texto)."</p>";

    echo "<h4>3. Sustituir texto</h4>";

    //str_replace(): Sustituir texto en una cadena

    $frase = "Estoy estudiando JAVA";

    $nuevaFrase = str_replace("JAVA", "PHP", $frase);

    echo "<p>Frase original: $frase</p>";
    echo "<p>Nueva frase: $nuevaFrase</p>";

    echo "<h4>4. Extraer texto</h4>";

    //substr(): Extraer una parte de una cadena

    $texto = "Programación PHP";

    $parte = substr($texto, 0, 11);

    echo "<p>Texto original: $texto</p>";
    echo "<p>Texto extraído: $parte</p>";

?>

