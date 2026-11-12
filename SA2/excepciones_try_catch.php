<?php

echo "<h4>1. Excepciones TRY...CATCH...FINALLY</h4>";

$edad = 19;

try{
    if ($edad < 18) {
        throw new Exception("Debes ser mayorde edad.");
    }

    echo "<p>Acceso permitido.</p>";

}
catch (Exception $e) {

    echo "<h3>Información de la excepción</h3>";

    echo "<p>Mensaje: " . $e->getMessage() . "</p>";
    echo "<p>Código: " . $e->getCode() . "</p>";
    echo "<p>Archivo: " . $e->getFile() . "</p>";
    echo "<p>Línea: " . $e->getLine() . "</p>";
}
finally {
    echo "<p>Fin del programa.</p>";
}