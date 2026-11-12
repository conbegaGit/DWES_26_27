<?php

class Persona{  
    public $nombre;
    public $edad;
}

$persona1 = new Persona();
$persona2 = new Persona();

$persona1->nombre = "Ana";
$persona1->edad = 20;

$persona2->nombre = "Carlos";
$persona2->edad = 22;

echo "<p>Nombre: " . $persona1->nombre . "</p>";    
echo "<p>Edad: " . $persona1->edad . "</p>";

echo "<hr>";

echo "<p>Nombre: " . $persona2->nombre . "</p>";
echo "<p>Edad: " . $persona2->edad . "</p>";

