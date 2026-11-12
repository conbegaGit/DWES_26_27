<?php

echo "<h4>Crear objetos Persona SIN constructor y SIN metodos</h4>";

/*
Class persona: defina una clase llamada persona.
$nombre y $edad: son los atributos de la clase.
public: indica que los atributos son accesibles desde fuera de la clase.
*/

class Persona {
    public $nombre;
    public $edad;
}

// Creamos dos objetos
$persona1 = new Persona();
$persona2 = new Persona();

// Asignamos valores
$persona1 -> nombre = "Ana";
$persona1 -> edad = 20;

$persona2 -> nombre = "Luis";
$persona2 -> edad = 25;

// Mostramos los datos
echo "<p>Persona 1: Nombre: " . $persona1 -> nombre ."</p>";
echo "<p>Persona 1: Edad: " . $persona1 -> edad ."</p>";

echo "<hr>";

echo "<p>Persona 2: Nombre: " . $persona2 -> nombre ."</p>";
echo "<p>Persona 2: Edad: " . $persona2 -> edad ."</p>";