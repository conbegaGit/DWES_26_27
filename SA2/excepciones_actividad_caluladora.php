<?php

    echo " <h4>Excepciones en calculadora</h4>";

    $numero1=10;
    $numero2=0;

    class DivisionPorCeroException extends Exception{
    }



    try{
        if($numero1 != number_format($numero1) || $numero2 != number_format($numero2)){
            throw new InvalidArgumentException("Los valores deben ser números válidos");
        }
        if($numero2 == 0){
            throw new DivisionPorCeroException("No se puede dividir entre 0");
        }
        $resultado=$numero1/$numero2;
        echo "El resultado es: " . $resultado;
        
    }catch(InvalidArgumentException $e){
        echo "Error: " . $e->getMessage();
    }catch(DivisionPorCeroException $e){
        echo "Error: " . $e->getMessage();
    }finally{
        echo "Calculadora finalizada";
    }