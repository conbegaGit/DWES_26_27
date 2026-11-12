<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO con metodos</title>
</head>
<body>
    <?php
        echo "<h4>Crear objetos Persona CON constructor y CON Métodos</h4>";

        class Persona{
        public $nombre;
        public $edad;
        
        //Constructor: Método mágico, son nombres reservados a tareas concretas y que comeinzan con dos guiones bajos "__".
        public function __construct($nombre, $edad){
            $this->nombre = $nombre;
            $this->edad = $edad;
        }
        /*
        - public function mostrarDatos(): define un método público.
        - $this: hace referencia al objeto actual
        - $this->nombre: permite acceder al atributo nombre del objeto actual
        - $p1->mostrarDatos(): ejecuta el método del objeto
        */
        public function mostrarDatos(){
            echo "<p>Nombre: " . $this->nombre . "</p>";
            echo "<p>Nombre: " . $this->edad . "</p>";
        }
        }

        //Creamos el objeto indicando los valores
        $p1 = new Persona("Ana", 20);
        $p1->mostrarDatos();
    ?>
</body>
</html>