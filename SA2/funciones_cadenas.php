<?php
    echo "<h4>1. Longitud de una cadena</h4>";

    $nombre = "Pedro";

    $longitud = strlen($nombre);

    echo "<p>Nombre: $nombre</p>";
    echo "<p>Número de caracteres: $longitud</p>";

    echo "<h4>2. Transformar cadenas</h4>";

    $texto = "Hola Elecciones Generales del 29";

    echo "<p>Original: $texto</p>";
    echo "<p>Mayúsculas: " . strtoupper($texto) . "</p>";
    echo "<p>Original: " . strtolower($texto) . "</p>";

    echo "<h4>3. Sustituir texto</h4>";

    $frase = "Estoy estudiando Java";

    $nuevaFrase = str_replace("Java","PHP", $frase);

    echo "<p>Frase original: $frase</p>";
    echo "<p>Frase modificada: $nuevaFrase</p>";

    echo "<h4>4. Extraer texto</h4>";

    $texto = "Programación PHP";

    $parte = substr($texto, 0, 11);
    
    echo "<p>Texto original: $texto</p>";
    echo "<p>Texto extraído: $parte</p>";