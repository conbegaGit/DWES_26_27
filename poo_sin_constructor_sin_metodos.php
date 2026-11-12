<?php

    echo"<h4>crear objeto Persona sin constructor y sin metodos</h4>";
    /*
    class Persona:define una clase llamadaPersona.
    $nombre y $edad:son losatributos de la clase 
    public:indica que los atributos son accesibles desde fuera de la clase.
    */

    class Persona{
        public $nombre;
        public $edad;
    }

    //crear dos objetos de la clase Persona
    $persona1=new Persona();
    $persona2=new Persona();    

    $persona2->nombre="pepe";   
    $persona2->edad=30;

    //asignar valores a los atributos de los objetos
    $persona1->nombre="lucia";  
    $persona1->edad=20;

    echo "El nombre de la persona 1 es: ".$persona1->nombre." y su edad es: ".$persona1->edad."<br>";
    echo "El nombre de la persona 2 es: ".$persona2->nombre." y su edad es: ".$persona2->edad;
