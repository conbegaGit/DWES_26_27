<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* Misma estructura que en java */
        $var = 3;
        echo "<h3> IF - ELSEIF - ELSE</h3>";
        if ($var == 1){
            echo "Es un uno";
        }elseif ($var == 2){
            echo "Es un dos";
        }elseif ($var == 3){
            echo "Es un tres";
        }else{
            echo "No es un uno, ni un dos, ni un tres";
        }
        /* Misma estructura que en java */
        echo "<h3> SWITCH </h3>";
        $var = 4;

        switch ($var){
            case 1:
                echo "Es un uno";
                break;
            case 2:
                echo "Es un dos";
                break;
            case 3:
                echo "Es un tres";
                break;
            default:
                echo "No es un uno, ni un dos ,ni un tres";
                break;
        }

    ?>
</body>
</html>