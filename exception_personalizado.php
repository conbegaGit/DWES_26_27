<?php

    echo"<h4>Excepciones personalizadas</h4>";

    class EdadInvalidaException extends Exception{
    }

    $edad=15;

    try{
        if($edad<18){
            throw new EdadInvalidaException("No puede entrar al bar");
        }else{
            echo "Bienvenido al bar";
        }
    }catch(EdadInvalidaException $e){
        echo "Error: " . $e->getMessage();
    }finally{
        echo"<h4>Bloque finally</h4>";
        echo "Se ejecuta siempre";
    }