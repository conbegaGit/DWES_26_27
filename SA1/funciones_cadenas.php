<?php

    echo "<h4>1. Longitud de una cadena</h4>";
    //strlen(): obtener la longitud de una cadena
    //devuelve el número de bytes de una cadena

    $nombre = "Afia";

    $longitud = strlen($nombre);

    echo "<p>Nombre: $nombre</p>";
    echo "<p>Número de caracteres: $longitud</p>";


    
    echo "<h4>2. Transformar cadenas</h4>";
    //strtoupper() y strtolower(): Cambiar mayusculas

    $texto = "Hola Alumnado de DAM";

    echo "<p>Original: $texto</p>";
    echo "<p>Texto en mayúsculas: " . strtoupper($texto) . "</p>";
    echo "<p>Texto en minúsculas: " . strtolower($texto) . "</p>";



    echo "<h4>3. Sustituir texto</h4>";
    //str_replace(): sustituir una parte de cadena

    $frase = "Estoy estudiando Java";

    $nuevaFrase = str_replace("Java", "PHP", $frase);

    echo "<p>Frase original: $frase</p>";
    echo "<p>Frase modificada: $nuevaFrase</p>";



    echo "<h4>4. Extraer texto</h4>";
    //substr(): extraer una parte de cadena

    $texto = "Programacion PHP";

    $parte = substr($texto, 0, 11);

    echo "<p>Texto original: $texto</p>";
    echo "<p>Parte extraída: $parte</p>";

    //el segundo argumento indica la posición inicial y el tercero cuántos caracteres (bytes) queremos extraer 



?>