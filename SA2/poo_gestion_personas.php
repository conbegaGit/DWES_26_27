<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de personas</title>
</head>
<body>
    <?php
    echo "<h4>GESTIÓN DE PERSONAS DEL CENTRO</h4>";
    //Clase persona
    class Persona {
        //constante de la clase
        const edad_minima = 0;

        //Atributos privados
        private $nombre;
        private $edad;

        //Atributo estatico: Un atributo estático pertenece a la clase y es compartido por todas sus instancias
        private static $contador = 0;

        //Constructor
        public function __construct($nombre, $edad){
            $this->nombre = $nombre;
            $this->edad = $edad;

            //Cada vez que se crea una persona, aumenta el contador
            self::$contador++;
        }

        //Getter del nombre
        public function getNombre(){
            return $this->nombre;
        }

        //GETTER de edad
        public function getEdad(){
            return $this->edad;
        }

        //Setter del nombre
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        //Setter de edad
        public function setEdad($edad){
            if ($edad >= self::edad_minima){
                $this->edad = $edad;
            }else{
                throw new InvalidArgumentException(
                    "La edad no puede ser nergativa"
                );
            }
        }

        //Metodo estatico
        public static function getContador(){
            return self::$contador;
        }

        //Metodo mágico
        public function __toString(){
            return "Nombre: " . $this->nombre . " | Edad: " . $this->edad . " años";
        }
    }

    //Clase alumno
    class Alumno extends Persona{
        private $curso;
        private $nota;


        public function __construct($nombre, $edad, $curso, $nota){
            //Llamamos al constructor de la clase padre
            parent::__construct($nombre, $edad);

            $this->curso = $curso;
            $this->setNota($nota);
        }

        public function getCurso(){
            return $this->curso;
        }

        public function getNota(){
            return $this->nota;
        }
    }
    ?>
</body>
</html>