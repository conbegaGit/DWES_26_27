<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poo sin constructor y metodo</title>
</head>
<body>
    <?php
    echo "<h4>Crear objetos Persona SIN constructor y SIN Métodos</h4>";

    /*
    class Persona: define una clase llamada Persona
    $nombre y $edad: son los atributos de la clase
    public: indica que los atributos son accesibles desde fuera de la clase
    */

    class Persona{
        public $nombre;
        public $edad;
    }

    //Creamos dos objetos
    $p1 = new Persona();
    $p2 = new Persona();

    //Asignamos valores
    $p1->nombre="Ana";
    $p1->edad=20;

    $p2->nombre="Carlos";
    $p2->edad=22;

    //Mostramos los datos
    echo "<p>Nombre: " . $p1->nombre ."</p>";
    echo "<p>Nombre: " . $p1->edad ."</p>";
    echo "<hr>";
    echo "<p>Nombre: " . $p2->nombre ."</p>";
    echo "<p>Nombre: " . $p2->edad ."</p>";
    ?>
</body>
</html>