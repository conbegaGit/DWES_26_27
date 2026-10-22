<?php
    echo"<h2>IF ELSE IF</h2>";
    $var = 3;
    if ($var == 1) {
        echo 'Es un uno';
    }elseif ($var == 2) {
        echo 'Es un dos';
    }elseif ($var == 3) {
        echo 'Es un tres';
    }else{
        echo 'No es un uno, ni un dos, ni un tres';
    }
    echo "<hr>";
    echo "<h2>Switch</h2>";
    $var = 4;
    switch($var){
        case 1:
            echo "<b>Es un 1</b>";
            break;
        case 2:
            echo "<b>Es un 2</b>";
            break;
        case 3:
            echo "<b>Es un 3</b>";
            break;
        default:
            echo '<b>No es un 1, ni un 2, ni un 3</b>';
    }
    