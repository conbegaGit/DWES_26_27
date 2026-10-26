<?php
    $a = "variable \$a del principal";
    require "fichero_requerido.php";

    $b = "variable \$b del principal";
    echo "En el script princial";

    include "saludo.php";
    require "saludo.php";
    include_once "saludo.php";
    include_once "saludo.php";