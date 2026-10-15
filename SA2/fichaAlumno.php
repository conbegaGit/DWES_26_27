<!DOCTYPE html>
<html>
    <head>
        <title>Ficha del alumno</title>
    </head>
    <body>
        <?php
        echo "<h1>Ficha del alumno</h1><br>";
        $nombre = "Sergio";
        $edad = 19;
        $ciclo = "2GS DAM";
        echo '<h2>Datos de la ficha del alumno</h2><br>';
        echo "<b>Nombre: </b>$nombre<br>";
        echo "<b>Edad: </b>$edad<br>";
        echo "<b>Ciclo: </b>$ciclo<br>";
        echo "La variable \$nombre de tipo (".gettype($nombre).") contiene el nombre del alumno el cual es $nombre<br>";
        ?>
    </body>
</html>