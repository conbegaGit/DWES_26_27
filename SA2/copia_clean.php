<?php
$var1 = 100;
$var2 = &$var1; //se crea con referencia. Se unen.
$var3 = $var1; //se crea por copia normal.
echo "$var2<br>"; //vemos que vale lo mismo que la 1.
$var2 = 300; //ahora var1 vale lo mismo que var2, ya que se han unido.
echo "$var1<br>"; //vemos que 1 vale lo que 2.
$var3 = 400;
echo $var1; //vemos que 1 no vale lo mismo que 3, ya que se han creado por copia.
