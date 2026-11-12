<?php

    echo "<h2>Excepciones Try...catch...finally</h4>";

    $edad = 15;

    try{
        if ($edad < 18) {
            throw new Exception ("Debes ser mayor de edad");
        }

        echo "<p>Acceso permitido</p>";
    } catch (Exception $e) {
        echo "<h3>Información de la excepción</h3>";

        echo "<p>Mensaje: " . $e->getMessage() . "</p>";
        echo "<p>Código: " . $e->getCode() . "</p>";
        echo "<p>Archivo: " . $e->getFile() . "</p>";
        echo "<p>Línea: " . $e->getLine() . "</p>";
    } finally {

    }