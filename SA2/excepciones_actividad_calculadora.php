<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <?php
    echo "<h4>Calculadora</h4>";
    //Comprobar que son dos números
    //Comprobar que se puede dividir
    
    $num1 = 20;
    $num2 = 0;

    try{
        if(!is_numeric($num1) || !is_numeric($num2)){
            throw new InvalidArgumentException("Los valores deben de ser numéricos");
        }

        if($num2 == 0){
            throw new DivisionByZeroError("No se puede dividr entre cero");
        }
        $resultado = $num1 / $num2;
        echo "<p>Resultado: $resultado/p>";
    }catch(InvalidArgumentException $e){
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }catch(DivisionByZeroError $e){
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }finally{
        echo "<p>Calculadora finalizada</p>";
    }

    ?>
</body>
</html>