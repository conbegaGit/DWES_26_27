<?php

    //La palabra once significa que php cpmprueva si el archivo ya ha sido incluido y si es así no lo incluye de nuevo.
    $a= "variable \$a del principal";
    require "fichero_requerido.php";
    // require_once "fichero_requerido.php";
    $b= "variable \$b del principal";
    echo"en el script principal: <br>";

    // cuantas veceas habra el saludo
    include "saludo.php";
    require "saludo.php";
    include_once "saludo.php";
    require_once "saludo.php";




