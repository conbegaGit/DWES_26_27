<?php

    //La palabra once significa que PHP comprueba si ese archivo ya se ha incluido
    //durante la ejecución y, si es así, evita volver a ejecutarlo.
    $a = "variable \$a del principal";
    require "fichero_requerido.php";
    //require_once "fichero_requerido.php
    $b = "otra variable \$b del principal";
    echo "En el script principal";

    //¿Cuántas veces se hará el saludo?
    include "saludo.php";
    require "saludo.php";
    include_once "saludo.php";
    require_once "saludo.php";