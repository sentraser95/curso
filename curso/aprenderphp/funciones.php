<?php
/*

Funciones es un conjunto de instruciones agrupadas bajo un nombre concreto y que pueduen reutilizando solamente llamando a la funcion 

function Mynamefunction($parametro)
{
  //bloque de la funcion o cunfunto de operaciones
}

*/

function muestranombres()
{
   echo "Jaime <br/>";
   echo "Gaytan"; 
}
function tabla($n){

for($i = 1; $i<=10; $i++)
{
    
      $oper = $i * $n;
      echo "$n x $i =$oper"."<br/>";

}

}
//invocar la funcion 
//tabla(2);
function cal($n , $n2)
{
   $suma = $n + $n2;
   $m = $n * $n2; 
   $r = $n - $n2;
   $d = $n / $n2;
   
   $resultado .=  "la suma es:$suma<br/>";
   $resultado .= "la multiplicacion es:$m<br/>";
   $resultado .= "la resta es$r<br/>";
   $resultado .= "la divicion es: $d<br/>";
 
return $resultado;

}

echo cal(3 , 2 );
?>
