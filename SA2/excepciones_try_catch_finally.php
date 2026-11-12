<?php

echo "<h2>Excepciones Try...catch...finally</h4>";

$edad = 15;

try{
    //Codigo que puede generar una excepcion
    if ($edad < 18) {
        throw new Exception ("Debes ser mayor de edad");
    }

    echo "<p>Acceso permitido</p>";
} catch (Exception $e) {
    //Tratamiento de la excepción

    /* El objeto $e que recibe catch permite consultar información sobre la excepción

    getMessage(): Devuelve el mensaje de error.
    getCode(): Devuelve el codigo de la excepcion
    getFile():Devuelve el archivo donde se produjo
    getLine(): Devuelve el numero de linea
    getTrace(): devuelve informacion sobre la secuencia de llamadas
    */

    echo "<h3>Información de la excepción</h3>";

    echo "<p>Mensaje: " . $e->getMessage() . "</p>";
    echo "<p>Código: " . $e->getCode() . "</p>";
    echo "<p>Archivo: " . $e.getFile() . "</p>";
    echo "<p>Línea: " . $e->getLine() . "</p>";
} finally {
    //Código que se ejecuta al finalizar
}