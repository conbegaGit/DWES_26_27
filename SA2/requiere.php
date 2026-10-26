<?php
    $a = "variable \$a del principal";
    require "fichero_requerido.php";
    $b = "otra variable \$b del principal";
    echo "En el script principal<br>";
    
    include "saludo.php";
    require "saludo.php";
    include_once "saludo.php";
    require_once "saludo.php";