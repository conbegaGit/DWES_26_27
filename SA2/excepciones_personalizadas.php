<?php
    echo "<h4>Excepciones PERSONLAZIDAS</h4>";

    class EdadInvalidaExcepetion extends Exception {
    }

    $edad = 15;

    try {
        if ($edad < 18) {
            throw new EdadInvalidaExcepetion(
                "La edad debe ser igual o superior a 18 años."
            );
        }

        echo "<p>Edad correcta.</p>";

    } catch (EdadInvalidaExcepetion $e) {
        echo "<p>Error: ". $e->getMessage()."</p>";
    }