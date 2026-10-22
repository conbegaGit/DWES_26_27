<?php
# Probando el uso de estructuras de repetición o bucles.
echo "<h3>1. Bucle for</h3>"; # El bucle for realiza las instrucciones que contenga cierta cantidad de veces, según se le indique en la condición.
for ($i = 0; $i < 5; $i++) {
    echo "En el for $i<br>"; //$i imprime números del 0 al 5 cada vez que lo recorra, finaliza al llegar a valer 5.
}

echo "<h3>2. Bucle while</h3>"; # El bucle while recorre el bucle mientras se cumpla la condición. Necesita cumplirla de antemano para entrar.
$i = 0;
while ($i < 5) { 
    echo "En el while $i<br>";
    $i++; # Se incrementa la variable para acercarse al fin de la condición.
}

echo "<h3>3. Bucle do-while</h3>"; # Funciona igual que el while, salvo por que siempre recorre el bucle al menos una vez, es decir, entra y al final comprueba la condición.
$i = 0;
do {
    echo "En el do-while $i<br>";
    $i++;
} while ($i < 5);
?>