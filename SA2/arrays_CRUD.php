<?php
    echo "<h4>1. Crear un array</h4>";

    // existen dos formas de crear una array
    $frutas =["manzana", "pera", "naranja"];

    $frutas = array("manzana", "pera", "naranja");

    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    echo "<h4>2. Consultar un elemento</h4>";

    echo "La fruta en la posicion \$frutas[0] es $frutas[0] <br>";
?>