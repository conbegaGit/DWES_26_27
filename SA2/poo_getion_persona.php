<?php
    echo"<h4>Gestion de personas del centro</h4>";

    //clase padre : persona

    class Persona{
        //CONSTANTE: es un valor que no puede cambiar durante la ejecucion del programa
        const EDAD_MINIMA=0;

        //atributos privados: solo se pueden acceder desde la propia clase
        private $nombre;
        private $edad;
        //ATRIBUTIO ESTATICO: es un atributo que pertenece a la clase y no a los objetos
        private static $contador=0;
        public function __construct($nombre,$edad){
            $this->nombre=$nombre;
            $this->edad=$edad;
            //incrementamos el contador de personas cada vez que se crea un objeto de la clase persona
            self::$contador++;
        }
        //GETER NOMBRE: metodo publico que devuelve el valor de un atributo privado
        public function getNombre(){
            return $this->nombre;
        }
        //SETTER NOMBRE: metodo publico que asigna un valor a un atributo privado
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        //GETTER EDAD: metodo publico que devuelve el valor de un atributo privado
        public function getEdad(){
            return $this->edad;
        }

        //SETTER DE EDAD CON VALIDADCION
        public function setEdad($edad){
            if($edad>=self::EDAD_MINIMA){
                $this->edad=$edad;
            }else{
                echo "La edad no puede ser negativa";
                throw new InvalidArgumentException("La edad no puede ser negativa");
            }
        }

        //metodo estatico: es un metodo que pertenece a la clase y no a los objetos
        public static function getContador(){
            return self::$contador;
        }

        //metodo magico
        public function __toString(){
            return "Nombre: ".$this->nombre." | Edad: ".$this->edad;
        }
    }

    //clase hija: alimno

    class Alumno extends Persona{
        private $nota;
        private $curso;
        public function __construct($nombre,$edad,$nota,$curso){
            //llamamos al constructor de la clase padre
            parent::__construct($nombre,$edad);
            $this->nota=$nota;
            $this->curso=$curso;
        }
        public function getNota(){
            return $this->nota;
        }
        public function setNota($nota){
            if($nota>=0 && $nota<=10){
                $this->nota=$nota;
            }else{
                echo "La nota debe estar entre 0 y 10";
                throw new InvalidArgumentException("La nota debe estar entre 0 y 10");
            }
        }
        public function getCurso(){
            return $this->curso;
        }
        public function setCurso($curso){
            $this->curso=$curso;
        }
        public function __toString(){
            return parent::__toString()." | Nota: ".$this->nota." | Curso: ".$this->curso;
        }
    }

