<?php

    echo"<h4>crear objeto Alumno con getter y setter</h4>";

    class Alumno{
        private $nombre;
        private $nota;

        public function __construct($nombre,$nota){
            $this->nombre=$nombre;
            $this->nota=$nota;
        }

        //getter:metodo publico que devuelve el valor de un atributo privado
        public function getNombre(){
            return $this->nombre;
        }

        //setter:metodo publico que asigna un valor a un atributo privado
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }

        public function getNota(){
            return $this->nota;
        }

        public function setNota($nota){
            $this->nota=$nota;
        }
    }

    $alumno1=new Alumno("lucia",8.5);

    echo "El nombre del alumno 1 es: ".$alumno1->getNombre()." y su nota es: ".$alumno1->getNota()."<br>";
    $alumno1->setNombre("pepe");
    $alumno1->setNota(6.5);
    echo "El nombre del alumno 1 es: ".$alumno1->getNombre()." y su nota es: ".$alumno1->getNota();


