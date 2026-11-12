<?php

    echo "<h4>Excepciones TRY...CATCH...FINALLY</h4>";

    $edad = 15;

    try {
        if ($edad < 18) {
            throw new Exception("Debes ser mayor de edad");
        }

        echo "<p>Acceso permitido</p>";
    } catch (Exception $e) {
        // Ttatamientos de la excepción

        /*
        El objeto $e que recibe catch permite consultar información sobre la excepción.

        getMessage(): Devuelve el mensaje de error.
        getCode(): Devuelve el código de la excepción.
        getFile(): Devuelve el archivo donde se introdujo la excepción.
        getLine(): Devuelve la línea donde se introdujo la excepción.
        getTrace(): Devuelve un array con la traza de la excepción.
        */

        echo "<h3>Información de la excpecion</h3>";

        echo "<p>Mensaje: " . $e->getMessage() . "</p>";
        echo "<p>Código: " . $e->getCode() . "</p>";
        echo "<p>Archivo: " . $e->getFile() . "</p>";
        echo "<p>Línea: " . $e->getLine() . "</p>";


        
    }