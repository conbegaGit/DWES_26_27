<?php
    echo "<h4>3. Funciones con return</h4>";

    function calcularIVA($precio){
        return $precio * 0.21;
    }

    $precio = 100;
    $iva = calcularIVA($precio);
    $total = $precio + $iva;

    echo "<p>Precio: $precio</p>";
    echo "<p>IVA: $iva</p>";
    echo "<p>Total: $total</p>";