<?php

    echo"<h4>Excepciones</h4>";

    $edad=15;

    try{
        if($edad<18){
            throw new Exception("No puede entrar al bar");
        }else{
            echo "Bienvenido al bar";
        } 
    }catch(Exception $e){
        //informacion de la excepcion
        //getMessage() devuelve el mensaje de error
        //getCode() devuelve el codigo de error
        //getFile() devuelve el archivo donde se ha producido la excepcion
        //getLine() devuelve la linea donde se ha producido la excepcion
        //getTrace devuelve un array con la traza de la excepcion
        echo"<h4>informacion de excepciones</h4>";
        echo "Error: " . $e->getMessage();
        echo "Código de error: " . $e->getCode();
        echo "Archivo: " . $e->getFile();
        echo "Línea: " . $e->getLine();
        echo "Traza: " . $e->getTraceAsString();
    }finally{
        echo"<h4>Bloque finally</h4>";
        echo "Se ejecuta siempre";
    }