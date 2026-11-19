<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
        class Persona: define una clase llamada Persona.
        $nombre y $edad: son los atributos de la clase.
        public: indica que los atributos son accesibles desde fuera de la clase.
        */
        class Persona{
            public $nombre;
            public $edad;
        }

        // Creamos dos objetos
        $persona1 = new Persona();
        $persona2 = new Persona();

        // Asignamos valores
        $persona1->nombre = "Ana";
        $persona1->edad = 22;

        $persona2->nombre = "Jeremy";
        $persona2->edad = 20;

        // Mostramos los datos
        echo "<p>Nombre: ". $persona1->nombre ."</p>";
        echo "<p>Edad: ". $persona1->edad ."</p>";
        
        echo "<hr>";

        echo "<p>Nombre: ". $persona2->nombre ."</p>";
        echo "<p>Edad: ". $persona2->edad ."</p>";
    ?>
</body>
</html>