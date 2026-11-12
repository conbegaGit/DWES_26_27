<?php

class Persona{

    private $nombre;
    private $edad;

    public function __construct($nombre, $edad){
        $this->nombre=$nombre;
        $this->edad=$edad;
    }

    public function mostrarDatos(){
        echo "<p>Nombre: " . $this->nombre . "</p>";
        echo "<p>Edad: " . $this->edad . "</p>";
    }
}

echo "<h4>PERSONA CREADA</h4>";

$persona1 = new Persona("Ana", 20);

$persona1->mostrarDatos();
