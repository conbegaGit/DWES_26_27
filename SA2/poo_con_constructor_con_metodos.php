<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h4></h4>";


        class Persona {

            private $nombre;
            private $edad;

            // Constructor: método mágico, son nombres reservados a tareas concretas 
            // y que comienzan por dos guinoes bajos, "__"
            public function __construct($nombre, $edad){
                $this->nombre = $nombre;
                $this->edad = $edad;
            }
            
            /*
                public function mostrarDatos(): define un método público.
                $this: hace referencia al objeto actual.
                $this->nombre: permite acceder al atributo nombre del objeto actual
                $persona1->mostrarDatos(): ejecuta el método del objeto
            */

            public function mostrarDatos(){
                echo "<p>Nombre: ". $this->nombre ."</p>";
                echo "<p>Edad: ". $this->edad ."</p>";
            }
        }


        // Creamos el objeo indicando los valores
        $persona1 = new Persona("Ana", 20);

        $persona1->mostrarDatos();
    ?>
</body>
</html>