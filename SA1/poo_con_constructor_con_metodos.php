<?php

echo "<h4>Crear objetos Persona CON constructor y CON métodos</h4>";

class Persona{
    public $nombre;
    public $edad;

    //Constructor método mágico, son nombres reservados a tareas concretas y que comienzan por 2 guiones bajos "__".
    public function __construct($nombre, $edad){
        
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    /*
    - public function mostrarDatos(): Define un método público
    - $this: hace referencia al objeto actual.
    - $this->nombre: permite acceder al atributo nombre del objeto actual.
    */
    public function mostrarDatos(){
        echo "<p>Nombre: ".$this->nombre."</p>";
        echo "<p>Edad: ".$this->edad."</p>";
    }
}

//Creamos el objeto indicando los valores.
$persona1 = new Persona("Juan", 30);

$persona1->mostrarDatos();