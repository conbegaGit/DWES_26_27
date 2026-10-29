<?php
    $a = "variable \$a del principal";
    require "fichero_requerido.php"; // se ejecuta el código del otro fichero como si estuviera escrito aquí

    $b = "otra variable \$b del principal";
    echo "En el script principal<br>";

    // cuantas veces se hará el salu2
    include "saludo.php"; 
    require "saludo.php"; 
    include_once "saludo.php"; 
    require_once "saludo.php"; 
