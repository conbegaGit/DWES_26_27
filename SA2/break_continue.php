<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo "<h3>1-. Primer for anidado</h3>";
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++){
            echo "Dentro de 2 for. i: $i j: $j <br>";
                if ($j == 1){
                    break;
                }
            }
            echo "-- Fuera del For. i: $i j: $j <br>";
        }
        echo "<br>";

        echo "<h3>2-. Segundo for anidados</h3>";
        for ($i = 0; $i < 3; $i++){
            for ($j = 0; $j < 3; $j++){
                echo "i: $i j: $j <br>";
                if ($j == 1){
                    break 2; // se indica cuantos bucles quieres romper mediante un numero
                }
            }
            echo "----- Fuera del For. NO se ejecuta nunca <br>";
        }
        echo "<br>";
        echo "<h3>3-. Sentencia continue:</h3>";
        for ($i = 0; $i < 5; $i++){
            if ($i == 3){
                continue; // rompe la iteracion actual y pasa a la siguiente ignorando el resto
            }
            echo "$i <br>";
        }

    ?>
</body>
</html>