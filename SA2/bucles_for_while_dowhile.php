<?php
echo "<h3>1. Bucle FOR</h3>";
for ($i = 0; $i < 5; $i = $i + 1) {
    echo "En el for $i <br>";
}

echo "<h3>2. Bucle WHILE</h3>";
$i = 0;
while($i < 5) {
    echo "En el wile $i <br>";
    $i = $i + 1;
}

echo "<h3>3. Bucle DO WHILE</h3>";
$i = 0;
do { //primero se ejecuta y luego se comprueba la condición
    echo "En el do-while: $i <br>"; //se imprime una vez aunque la condición sea falsa
    $i++;
} while ($i<0); // 1 no es menor que 0, asi que el bucle termina