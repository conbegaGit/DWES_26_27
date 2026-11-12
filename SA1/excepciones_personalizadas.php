<?php

    echo "<h4>Excepciones PERSONALIZADAS</h4>";

    class EdadInvalidException extends Exception {
    }

    $edad = 15;

    try {

        if ($edad < 18) {
            throw new EdadInvalidException(
                "La edad debe ser igual o superior a 18 años"
                );
        }

        echo "<p>Edad correcta</p>";

    } catch (EdadInvalidException $e) {
    
        echo "<p>Error: " . $e->getMessage() . "</p>";
    
    } 

?>

