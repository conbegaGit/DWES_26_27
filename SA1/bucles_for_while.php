<?php
echo"<h3>1.Bucles FOR</h3>";
for($i=0;$i<5;$i=$i+1){
    echo "En el for $i <br>";
}

echo"<h3>2.Bucles WHILE</h3>";
$i=0;
while($i<5){
    echo "En el while $i <br>";
    $i=$i+1;
}

echo"<h3>3.Bucles DO WHILE</h3>";
$i=0;
do{
    echo "En el do while $i <br>";
    $i=$i+1;
} while($i<0);