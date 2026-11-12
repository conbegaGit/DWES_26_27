<?php
echo"<h4>Crear objetos Persona SIN constructor y SIN métodos</h4>";

class Persona{
    public $nombre;
    public $edad;
}
$persona1 = new Persona();
$persona2 = new Persona();

$persona1->nombre = "Ana";
$persona1->edad = 25;

$persona2->nombre = "Carlos";
$persona2->edad = 2;
echo"<hr>";
echo"<p>Persona 1: Nombre: " . $persona1->nombre .", Edad: " . $persona1->edad . "</p>";
echo"<hr>";
echo"<p>Persona 2: Nombre: " . $persona2->nombre . ", Edad: " . $persona2->edad . "</p>";   
echo"<hr>";