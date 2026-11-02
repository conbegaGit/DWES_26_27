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

    echo"<h4>calcular la media de unas notas</h4>";

    $notas = [7,8,9,10,6];

    $media=array_sum($notas)/count($notas);
    echo"La media es: $media";

    //array_sum() devuelve la suma de todos los valores de un array
    //count() devuelve el número de elementos de un array

    echo"<h4>ordenar un array</h4>";

    //sort() ordena un array de menor a mayor y renumera los valores del array
    //ashrt() ordena por valor conservando las clavaes del array
    //ksort() ordena por clave

    $notas = [7,8,9,10,6];
    sort($notas);
    print_r($notas);

    $precio=[
        "raton"=>10,
        "teclado"=>20,
        "monitor"=>200
    ];
    
    asort($precio);
    print_r($precio);
    
    

    $alumnos=[
        ["nombre"=>"Juan","nota"=>7],
        ["nombre"=>"Ana","nota"=>8],
        ["nombre"=>"Pedro","nota"=>9]
    ];  

    echo"<h4>mostrar los datos rn una tabla html </h4>";

    echo"<table border='1'>";
    echo"<tr><th>Nombre</th><th>Nota</th></tr>";

    foreach($alumnos as $alumno){
        echo"<tr>";
        echo"<td>".htmlspecialchars($alumno["nombre"])."</td>";
        echo"<td>".$alumno["nota"]."</td>";
        echo"</tr>";
    }
