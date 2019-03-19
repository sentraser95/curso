<?php
/*

Estructura de control que itera o repite una serie de instruciones.

while(condicion)
{
bloque de instruciones.
}
*/

$n = 0;
while($n <= 100)
{
  echo "<p>$n</p>";
  $n++;
}
//isset si usa para ver si hay una variable o no 

//si pones un tipo int () $ GET es para cambiar el tipo de varable 
if(isset($_GET['$n']))
{

   $n =  $_GET['$n'];

}else

{
        $n =1;
}
echo "<h1>Tabla de multiplicar $numero</h1>";

$c = 1; 
while($contador <=10)
{
      echo "$n x $contador =".($n*$c)."<br/>";
      $c++;
}
//break nos ayuda a salir del bucle
?>
