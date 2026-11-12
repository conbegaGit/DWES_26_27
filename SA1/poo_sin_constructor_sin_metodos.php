<?php

echo "<h4>Crear objetos Persona SIN constructor y SIN métodos</h4>";

/*
class Persona: define una clase llamada Persona
$nombre y $edad: son los atributos de la clase
public: indica que los atributos son accesibles desde fuera de la clase

*/
class Persona{
    public $nombre;
    public $edad;
}

//Creamos 2 objetos
$persona1 = new Persona();
$persona2 = new Persona();

//Asignamos valores
$persona1->nombre = "Juan";
$persona1->edad = 30;

$persona2->nombre = "María";
$persona2->edad = 25;

//Mostramos los datos
echo "<p>Nombre: ".$persona1->nombre."</p>";
echo "<p> Edad: ".$persona1->edad."</p>";

echo "<hr>";

echo "<p>Nombre: ".$persona2->nombre."</p>";
echo "<p> Edad: ".$persona2->edad."</p>";