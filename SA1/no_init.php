<?php
    // var1 = 100
    $var1 = 100;

    // var3 = 100, si no existe y el tipo de datos es igual da un warning.
    $var3 = 100 + $var2; 
    echo "$var3 <br>";

    // var3 = 100 * 0 = 0. El $var2 no existe pero el tipo de datos es null
    // php transforma el null a 0? Y te da Warning
    $var3 = 100 * $var2;
    echo "$var3 <br>";

    // Aqui SI da fatal error, $var2 no existe pero el tipo de datos no es compatible
    $var4 = "Hi" + $var2;

    // Este NO se llega a ejecutar porque si hay un fatal error, el programa se para
    echo "$var4 <br>";
?>