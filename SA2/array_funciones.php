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

    //array_sum() suma todos los valores de un array
    // sie l array está vacía devuelve 0 y eso tenemos que evitarlo
    // p.e. con count($notas)>0

    echo"<h4>3.Ordenar un array: sort</h4>";
    // sort($array): Ordena los valores y renumera las claves numéricas
    // asort($array): Ordena los valores y mantiene las claves asociativas
    $notas =[8,5,9,6];
    sort($notas);
    print_r($notas);

    $precios = [
        "raton"=>25,
        "teclado"=>10,
        "monitor"=>150
    ];
    asort($precios);
    echo"<pre>";
    print_r($precios);

    echo"<h4>4. Filtrar elementos de un array</h4>";

    $notas =[4,7,3,9,5,2];
    $aprobados = array_filter(
        $notas,
        function($nota){
            return $nota>=5;
        }
    );
    $alumnos = [
        ["nombre"=>"Lucía","edad"=>8],
        ["nombre"=>"Pablo","edad"=>4],
        ["nombre"=>"Marta","edad"=>9]
    ];
    echo"<h4>6. Mostrar datos en tabla html</h4>";

    echo"<table border='1'>";
    echo"<tr><th>Nombre</th><th>Edad</th></tr>";

    foreach($alumnos as $alumno){
        echo"<tr>";
        echo"<td>".$alumno["nombre"]."</td>";
        echo"<td>".$alumno["edad"]."</td>";
        echo"</tr>";
    }
    echo"</table>";

    // htmlspecialchars() ayuda a evitar que el texto se interprete
    // como código html cuando se muestra en una página

    