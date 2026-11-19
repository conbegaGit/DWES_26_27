<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h4>Calculadora</h4>";

        $numero0 = 20;
        $numero1 = 0;
        
        try{
            if(!is_numeric($numero0) || !is_numeric($numero1)){ // InvalidArgument
                throw new InvalidArgument ("El valor de ambos numeros tiene que ser numerico");
            }

            if($numero1 == 0){
                throw new DivisionByZero ("El segundo valor no puede ser igual a 0");
            }

            $resultado = $numero0/$numero1;

            echo "<Resultado: $resultado.";
        }catch(InvalidArgument $e){
            echo "<p>". $e->getMessage() ."</p>";
        }catch(DivisionByZeroError $e){
            echo "<p>". $e->getMessage() ."</p>";
        }finally{
            echo "<p>El programa ha finalizado</p>";
        }

    ?>
</body>
</html>