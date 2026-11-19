<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo "<h4>1. Longitud de una cadena</h4>";
        // strlen(): Obtener la longitud de una cadena de texto
        // Devuelve el numero de bytes de una cadena

        $nombre = "Daniel";

        $longitud = strlen($nombre);
        echo "<p>Nombre: $nombre.</p>";
        echo "<p>Numero de de caracteres: $longitud.</p>";


        echo "<h4>2. Transformar cadenas</h4>";

        //strtoupper() y strtolower(): Cambiar mayuscula y minusculas

        $texto = "Hola Alumnado de DAM";

        strtoupper($texto);
        echo "$texto";
        strtolower($texto);
        echo "$texto";

        echo "<h4>3. Sustituir texto</h4>";
        // str_repalce(): Sustituir una parte de una cadena

        $frase = "Estoy estudiando Java";

        $nuevaFrase = str_replace("Java", "PHP", $frase);
        echo "Frase original: $frase<br>";
        echo "Frase cambiada: $nuevaFrase<br>";

        echo "<h4>4. Extraer texto</h4>";
        // substr(): Extraer una parte de una cadena

        $texto = "Programación PHP";

        $parte = substr($texto, 0, 11);

        echo "<p>Texto original: $texto</p>";
        echo "<p>Texto extraído: $parte</p>";

        // el segundo argumento indica la posición inicial
        // el tercero cuántos caracteres (bytes) queremos extraer.
    ?>
</body>
</html>