<?php

echo "<h4>Crear objetos Persona SIN constructor y sin metadatos</h4>";
class Persona{

    public $nombre;
    public $edad;
}

$persona1 = new Persona();
$persona2 = new Persona();

$persona1->nombre = "Juan";
$persona1->edad = 30;

$persona2->nombre = "María";
$persona2->edad = 25;

echo "<p>Nombre: " . $persona1->nombre . "<p>";
echo "<p>Edad: " . $persona1->edad . "<p>";

echo "<hr>";

echo "<p>Nombre: " . $persona2->nombre . "<p>";
echo "<p>Edad: " . $persona2->edad . "<p>";
