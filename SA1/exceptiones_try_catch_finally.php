<?php

echo "<h4>Excepciones TRY CATCH FINALLY</h4>";

$edad=15;

try{
    //Código que puede generar una excepción
    if($edad<18){
        throw new Exception("Debe sermayor de edad");
    }

    echo "<p>Acceso permitido</p>";
}catch(Exception $e){
    //Parametro de la excepción

    //El objeto recibe catch permite consultar información sobre la excepción.

    //getMessage() devuelve el mensaje de la excepción.
    //getCode() devuelve el código de la excepción.
    //getFile() devuelve el nombre del archivo donde se produjo.
    //getLine() devuelve el número de línea.
    //getTrace() devuelve la información sobre la secuencia de llamadas.

    echo "<h3>Información de la excepción</h3>";
    echo "<p>Mensaje: ".$e->getMessage()."</p>";
    echo "<p>Código: ".$e->getCode()."</p>";
    echo "<p>Archivo: ".$e->getFile()."</p>";
    echo "<p>Línea: ".$e->getLine()."</p>";
}finally{
    //código que se ejecuta al finalizar
    echo "<p>Fin del programa</p>";
}
