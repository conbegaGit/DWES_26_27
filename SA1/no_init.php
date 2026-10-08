<?php 
    $var1 = 100;
    $var3 = 100 + $var2; //var2 no existe, se toma como 0 --> 100 + 0
    echo "$var3 <br>"; //muestra 100

    $var3 = 100 * $var2; //var2 no existe, se toma como 0 --> 100 * 0
    echo "$var3 <br>"; //muestra 0

    $var4 = "Hola" + $var2; //probamos aver que sale con un string + una variable no inicializada
    echo "var4"; //debe de salir solo el texto


    //CONCLUSION: las variables no inicializadas no dan error, pq internamente estan = 0

    //TODO DA WARNIGN PORQUE NOS AVISA DE QUE LA VARIABLE NO ESTA INICIALIZADA
    //EL ULTIMO DA ERROR PORQUE NO SE PUEDE SUMAR STRING + NULL
?>


