<?php
    // Declaramos que var1 = 100
    $var1 = 100;

    // Ahora var2 apunta al valor de var1, si var1 cambia var2 cambia (y tambien viceversa) (por el &)
    $var2 = &$var1;

    // Ahora var3 = 100
    $var3 = $var1;

    // System.out.println(var2)
    echo "$var2<br>";

    // Ahora var2 = 300, y var1 tambien cambia a 300 (al haberlos apuntado)
    $var2 = 300;

    echo "$var1<br>";

    // Ahora var3 = 400
    $var3 = 400;
    echo $var1;
?>
