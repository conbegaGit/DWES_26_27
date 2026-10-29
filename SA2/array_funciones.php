<?php
    echo"<h4>1.Comprobar si existe un valor: in_array</h4>";
    $lenguajes = ["PHP", "Python", "Java"];
    if(in_array("PHP",$lenguajes)){
        echo "El lenguaje existe"; 
    }else{
        echo"El lenguaje no existe";
    }

    // El tercer argumento de in_array() permite exigir una comparación
    $numeros = [1,2,3];
    var_dump(in_array("2",$numeros,true)); // false

    echo"<h4>2.Calcular la media de las notas</h4>";
    $notas = [7,8,5,9,6];
    $media = array_sum($notas) / count($notas);
    echo "La media es: $media";