<?php

    $numero1 = 10;
    $numero2 = 0;

    try{
        if ($numero2 == 0){
            throw new Exception("No se puede dividir entre cero.");
        }
        $resultado = $numero1 / $numero2;
        echo "El resultado de la división es: $resultado";
    }catch(Exception $e){
        echo "<h3>Información de la excepción</h3>";
        echo "<p>Mensaje: ". $e->getMessage(). "}</p>";
    }finally{
        echo "<h4>Fin del programa</h4>";
    }
?>
