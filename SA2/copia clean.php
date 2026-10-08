<?php
    $var1 = 100;
    $var2 = &$var1; // $var2 es una referencia a $var1 , se funsionan en una sola rama y cualquier modificacion en var2 afecta a var1 y viceversa
    $var3 = $var1; // $var3 es una copia de $var1, se crean dos ramas independientes y cualquier modificacion en var3 no afecta a var1 y viceversa
    echo "$var2 <br>"; // imprime 100
    $var2 = 300; // se modifica el valor de $var2, lo que afecta a $var1
    echo "$var1<br>"; // imprime 300
    $var3 = 400; // se modifica el valor de $var3, lo que no afecta a $var1
    echo "$var1"; // imprime 300