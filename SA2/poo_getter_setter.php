<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getter y Setter</title>
</head>
<body>
    <?php
    echo "<h4>Crear objetos con atributos private</h4>";

    class Alumno {
        private $nombre;
        private $nota;

        public function __construct($nombre, $nota){
            $this->nombre = $nombre;
            $this->setNota($nota);
        }

        //GETTER
        public function getNombre(){
            return $this->nombre;
        }

        //GETTER
        public function getNota(){
            return $this->nota;
        }

        //SETTER
        public function setNota($nota){
            if($nota >= 0 && $nota <=10){
                $this->nota = $nota;
            }else{
                echo "<p>La nota debe de estar entre 0 y 10</p>";
            }
        }
    }

    $a1 = new Alumno("María", 8);

    echo "<p>Alumno: " . $a1->getNombre() . "</p>";
    echo "<p>Nota: " . $a1->getNota() . "</p>";

    $a1->setNota(9);

    echo "<p>Nueva nota: " . $a1->getNota() . "</p>";

    ?>
</body>
</html>