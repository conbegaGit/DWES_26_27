<?php

    echo "<h4>Excepciones TRY...CACH...FINALLY</h4>";

    $edad = 15;

    try {
        //código que puede generar una excepción
        if ($edad < 18) {
            throw new Exception("Debes ser mayor de edad");
        }

        echo "<p>Acceso permitido</p>";
    } catch (Exception $e) {
        //tratamiento de la excepcion

        /*
        El objeto se quqe recibe catch permite consultar información sobre la excepción

        getMessage(); devuelve el mensaje de error
        getCode(); devuelve el código de la excepción
        getFile(); devuelve el archivo donde se produjo
        getLine(); devuelve el número de línea
        getTrace();devuelve información sobre la secuencia de llamadas
        */

        echo "<h3>Información de la excepción</h3>";

        echo "<p>Mensaje: " . $e->getMessage() . "</p>";
        echo "<p>Código: " . $e->getCode() . "</p>";
        echo "<p>Archivo: " . $e->getFile() . "</p>";
        echo "<p>Linea: " . $e->getLine() . "</p>";

    } finally {
        //código que se ejecuta al finalizar
        echo "<p>Fin del programa</p>";
    }

?>

