<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>break_continue</title>
</head>
<body>
    <?php
    echo "<h3>1. Primer for anidado</h3>";
    for ($i =0; $i < 3; $i++){
        for ($j = 0; $j < 3; $j++){
            echo "Dentro de 2 for. i: $i j: $j<br>";
            if($j == 1){
                break; //break = break 1
            }
        }
        echo "-- Fuera del for. i: $i j: $j<br>";
    }
    echo "<br>";
    echo "<h3>2. Segundo for anidado</h3>";
    for ($i =0; $i < 3; $i++){
        for ($j = 0; $j < 3; $j++){
            echo "i: $i j: $j<br>";
            if($j == 1){
                break 2; //break N significa que sale de los bucles que indiques en el número
            }
        }
        echo "----- Fuera del for. NO se ejecuta nunca<br>";
    }
    echo "<br>";
    echo "<h3>3. Sentencia continue</h3>";
    for($i = 0; $i < 5; $i = $i +1){
        if($i == 3){
            continue; //continue = continue 1
        }
        echo "$i<br>";
    }
    ?>
</body>
</html>