<?php

class Persona{

    private $nombre;
    private $nota;

    public function __construct($nombre, $nota){
        $this->nombre=$nombre;
        $this->nota=$nota;
    }

    //GETTERS
    public function getNombre(){
        return $this->nombre;
    }

    public function getNota(){
        return $this->nota;
    }

    //SETTER

    public function setNota($nota){

        if ($nota>=0 && $nota<=10){
            $this->nota=$nota;
            return;
        }
        else {
            echo "<p>La nota debe estar entre 0 y 10</p>";
        }
    }

    //MOSTRAR DATOS
    public function mostrarDatos(){
        echo "<p>Nombre: " . $this->nombre . "</p>";
        echo "<p>Nota: " . $this->nota . "</p>";
    }
}

echo "<h4>PERSONA CREADA</h4>";

$persona1 = new Persona("María", 8);
$persona1->mostrarDatos();


echo "<h4>PERSONA MODIFICADA</h4>";

$persona1->setNota(5);
$persona1->mostrarDatos();
