<?php
    $var1 = 100;
    //var2 apunta al valor de var1, si var1 cambia, var2 cambia tambien y viceversa
    $var2 = &$var1;

    //var3 es var1, es decir, vale 100
    $var3 = $var1;
    echo "$var1 <br>";

    //si cambiamos el valor de var2, el valor de var1 tambien cambia, ya que var2 apunta a var1 --> var y var2 es 300
    $var2 = 300;
    echo "$var1 <br>";

    //aqui el var3 es una variable independiente 
    $var3 = 400;
    echo "$var1";

    //CONCLUSION: "&· apunta a una variable, si cambia el valor de una cambia el de la otra; "&" enlaza, le pone un puntero, es como que van a la par 

?>



