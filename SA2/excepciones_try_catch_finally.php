<?php

echo"<h4>Excepciones TRY...CATCH...FINALLY</h4>";

$edad = 15;
try{
    // Código que puede generar una excepción
    if($edad < 18){
        throw new Exception("Debes ser mayor de edad.");

    }
    echo"<p>Acceso permitido.</p>";
}catch(Exception $e){
    //Tratamiento de la excepción
    /* 
    El objeto $e que recibe catch permite consultar información sobre la exccepción
    getMessage(): Devuelve el mensaje de error,
    getCode(): Devuelve el código de la excepción,
    getFile(): Devuelve el nombre del archivo donde se produjo la excepción,
    getLine(): Devuelve el número de línea.
    getTrace(): Devuelve un array con la traza de la excepción,
    */

    echo"<h3>Información de la excepción</h3";
    echo"<p>Mensaje: " . $e->getMessage() . "</p>";
    echo"<p>Código: " . $e->getCode() . "</p>";
    echo"<p>Archivo: " . $e->getFile() . "</p>";
    echo"<p>Línea: " . $e->getLine() . "</p>";
}finally{
    // Código que se ejecuta siempre, haya o no una excepción
    echo"<p>Fin del bloque</p>";
}
