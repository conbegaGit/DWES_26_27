<?php

    echo "<h4>Excepciones PERSONALIZADAS</h4>";

    class EdadInvalidaException extends Exception {

    }

    $edad = 17;

    try {
        if ($edad < 18) {
            throw new EdadInvalidaException("La edad debe ser igual o superior a 18 años");
        };

        echo "<p>Edad Correcta</p>";

    } catch (EdadInvalidaException $e) {
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
