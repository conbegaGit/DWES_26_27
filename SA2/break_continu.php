<?php
echo"<h3>Primer for anidado: <br></h3>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo "i: $i j: $j <br>";
        if ( $j == 1) {
           break; 
        }
    }
} 
echo "<h3>Segundo for anidado: <br></h3>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo "i: $i j: $j <br>";
        if ( $j == 1) {
           break 2; 
        }
    }
} 
echo "<br>";
echo"<h3>3. Sentencia continue: <br></h3>";
for ($i = 0; $i <= 5; $i++) {
    if ( $i == 3) {
        continue; 
    }
    echo "$i <br>";
}