<?php
echo "<h4>Crear objetos Persona SIN constructor y SIN métodos</h4>";

/*
class PersonaBasica: define una clase llamada PersonaBasica.
$nombre y $edad: son los atributos de la clase.
public: indica que los atributos son accesibles desde fuera de la clase.
*/
class PersonaBasica {
    public $nombre;
    public $edad;
}

// Creamos dos objetos
$persona1 = new PersonaBasica();
$persona2 = new PersonaBasica();

// Asignamos valores (con -> se accede a los atributos del objeto)
$persona1->nombre = "Ana";
$persona1->edad = 22;

$persona2->nombre = "Luis";
$persona2->edad = 20;

// Mostramos los datos
echo "<p>Nombre: " . $persona1->nombre . "</p>";
echo "<p>Edad: " . $persona1->edad . "</p>";

echo "<hr>";

echo "<p>Nombre: " . $persona2->nombre . "</p>";
echo "<p>Edad: " . $persona2->edad . "</p>";
