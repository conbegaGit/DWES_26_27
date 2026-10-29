<?php

    echo"<h4>Arrays indexado</h4>";
    //cada elemento se identifica mediante un indice numerioco
    $color=["rojo","azul","verde"];
    echo"<pre>";
    print_r($color);
    echo"</pre>";
    echo "El color en \$color[1]es: $color[1]";

    echo"<h4>Arrays asociativo</h4>";
    //cada elemento se identifica medainte un clave elegida por nosotros
    $alumno=[
        "nombre"=>"lucia",
        "edad"=>20,
        "nota"=>8.5
    ];

    echo"<pre>";
    print_r($alumno);
    echo"</pre>";

    echo"El alumno se llama".$alumno["nombre"].", tiene ".$alumno['edad']." anos y con una nota: ".$alumno['nota'];

    echo"<h4>Arrays multidimensionales</h4>";
    // array con otros arrays
    $alumnos=[
        ["nombre"=>"lucia","nota"=>8.5],
        ["nombre"=>"pepe","nota"=>6.5],
        ["nombre"=>"marta","nota"=>5.5],
        ["nombre"=>"nuria","nota"=>9.5],
        ["nombre"=>"pablo","nota"=>7.5]
    ];

    echo"<pre>";
    print_r($alumnos);
    echo"</pre>";

    echo "El nombre delalumno en la posicion \$alumnos[1]['nombre'] es: ".$alumnos[1]["nombre"]."<br>";
    echo "El nombre delalumno en la posicion \$alumnos[2]['nombre'] es: ".$alumnos[2]["nombre"];