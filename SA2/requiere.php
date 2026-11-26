<?php

    //la palabra ONCE significa que PHP comprueba si ese archivo ya se ha incluido durante la ejecución y si es asi aevita volver a ejecutarlo
    $a = "variable \$a del principal";
    require "fichero_requerido.php";    //salta al archivo y hace lo que dice, vuelve y sigue aquii

    //requiere_once "fichero_requerido-php";
    $b = "otra variable \$b del principal";
    echo "En el script principal";

    //cuantas veces saldra el saludo???
    include "saludo.php";   //se ejecuta porque dice que lo incluya
    require "saludo.php";   //se ejectua porque el REQUIERE lo obliga a ejecutarlo

    include_once "saludo.php";  //no lo ejecuta porque como es ONCE y ya lo ha INCLUIDO antes pues no lo vuelve ha hacer
    require_once "saludo.php";  //no lo ejecuta porque como es ONCE y ya lo ha REQUERIDO (ejecutado) antes pues no lo vuelve ha hacer

?>

