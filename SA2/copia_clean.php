<?php
    $var1 =100;
    $var2 = &$var1;
    $var3 = $var1;
    echo "$var1<br>";
    $var2=300;
    echo "$var1<br>";
    $var3= 400;
    echo $var1;
    // como esta relacionado var1 y var2, al cambiar el valor de var2, también cambia el valor de var1.
    // pero el var3 es asignar de var1, asique no cambia con var2, asique cambie el valor de var3 nocambia el var1.