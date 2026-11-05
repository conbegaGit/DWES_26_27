<?php

    echo"<h4>Longitud de la cadena</h4>";

    //strln() devuelve la longitud de una cadena

    $nombre="Juan";
    $longitud=strlen($nombre);
    echo"<p>Nombre: $nombre</p>";
    echo"<p>Longitud: $longitud</p>";

    echo"<h4>Transformar cadenas</h4>";

    //strtoupper() transforma una cadena a mayúsculas
    //strtolower() transforma una cadena a minúsculas
    
    $texto="Hola Alumnado de DAM";
    echo"<p>Texto original: $texto</p>";
    echo"<p>Texto en mayúsculas: ".strtoupper($texto)."</p>";
    echo"<p>Texto en minúsculas: ".strtolower($texto)."</p>";

    echo"<h4>Sustituir texto</h4>";
    // str_replace() sustituye un texto por otro en una cadena

    $frase="estoy estudiando java";
    $nueva_frase=str_replace("java","PHP",$frase);
    echo"<p>Frase original: $frase</p>";
    echo"<p>Nueva frase: $nueva_frase</p>";

    echo"<h4>extraer texto</h4>";
    // substr() extrae una parte de una cadena

    $cadena="Programacion PHP";
    $parte=substr($cadena,0,12);
    echo"<p>Cadena original: $cadena</p>";
    echo"<p>Parte extraída: $parte</p>";

    