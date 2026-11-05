<?php
    echo "<h4>1. Longitud de una cadena</h4>";
    $nombre = "Juan Pérez";
    $longitud = strlen($nombre);

    echo "<p>Nombre: $nombre</p>";
    echo "<p>Numero de caracteres: $longitud</p>";

    echo "<h4>2. Transformación de cadenas</h4>";
    $texto= "Hola Alumnado de DAM";
    echo "<p>Texto original: $texto</p>";
    echo "<p>Texto en mayúsculas: " . strtoupper($texto) . "</p>";
    echo "<p>Texto en minúsculas: " . strtolower($texto) . "</p>";

    echo "<h4>3. Sustituir texto</h4>";

    $frase = "Estoy estudiando Java";

    $nuevaFrase = str_replace("Java", "PHP", $frase);
    echo "<p>Frase original: $frase</p>";
    echo "<p>Nueva frase: $nuevaFrase</p>";