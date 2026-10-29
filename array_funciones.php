<?php

    echo"<h4>comprobar si existe el valor</h4>";

    $lenguajes=["PHP","java","Python"];
    if(in_array("PHP",$lenguajes)){
        echo"El lenguaje existe";
    }else{
        echo"NO existe";
    }

    //El tercer argumento de  in array() permite exigir una comparación estricta de tipo y valor

    $numeros =[1,2,3];
    var_dump(in_array("2",$numeros,true));//false

    echo"<h4>calcular la media de unas notas</h4>"
    
    ;