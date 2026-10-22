<?php
echo"<h3>IF, ELSEIF Y SWITCH</h3>";
$var=3;
if($var==1){
    echo "Es un uno";
} elseif($var==2){
    echo "Es un dos";
} elseif($var==3){ 
    echo "Es un tres";
}else{
    echo "No es ni uno, ni dos, ni tres";
}

echo "<h3>SWITCH</h3>";
$var=4;
switch($var){
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
        echo "No es ni uno, ni dos, ni tres";
}