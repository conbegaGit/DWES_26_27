<?php

    echo"<h4>paso de argumentos por valor</h4>";
    // es elcomportamiento determindo de PHP

    function modificarNumero($numero){
        $numero+=10;
        echo"<p>Valor dentro de la función: $numero</p>";
    }   

    $valor=5;
    echo"<p>Valor antes de llamar a la función: $valor</p>";
    modificarNumero($valor);    
    echo"<p>Valor después de llamar a la función: $valor</p>";

    echo"<h4>paso de argumentos por referencia</h4>";
    
    //para pasar una variable por referencia utilizamos el símbolo & 

    function modificarNumeroReferencia(&$numero){
        $numero=100;
        echo"<p>Valor dentro de la función: $numero</p>";
    }

     $valor=5;
    echo"<p>Valor antes de llamar a la función: $valor</p>";
    modificarNumeroReferencia($valor);    
    echo"<p>Valor después de llamar a la función: $valor</p>";

