<?php

    echo"<h4>crear objeto Persona con constructor</h4>";

    class Persona{
        public $nombre;
        public $edad;

        //constructor:metodomagico, son nombres reservados a tareas concreatas, comienza en doble guion bajo, se ejecuta automaticamente al crear un objeto de la clase
        public function __construct($nombre,$edad){
            $this->nombre=$nombre;
            $this->edad=$edad;
        }
    

        /*
        public functiuon mostrarDatos():define un metodo publico
        $this: hace referencia al objeto actual, se utiliza para acceder a los atributos y metodos de la clase
        $this->nombre:accede al atributo nombre del objeto actual
        $persona1->mostrarDatos():llama al metodo mostrarDatos del objeto persona1
        */
        public function mostrarDatos(){
            echo "El nombre de la persona es: ".$this->nombre." y su edad es: ".$this->edad."<br>";
        }
    }

    //crear dos objetos de la clase Persona
    $persona1=new Persona("lucia",20);
    $persona2=new Persona("pepe",30);

    //llamar al metodo mostrarDatos de los objetos
    $persona1->mostrarDatos();
    $persona2->mostrarDatos();