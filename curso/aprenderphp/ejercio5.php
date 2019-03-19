<?php

/*

Es crear un arreglo de 8 enteros y que haga tiene que recorerlos y mostrarlo , ordenar , mostrar su longitud mostrar algun elemnto.
*/
$numero = array(1 , 2 , 4 , 8 , 5 ,6 , 7 , 9);
function Miarray($numero)
{

$resultado = "";
foreach($numero as $numero)
{
    
    $resultado .= $numero;
}
return $resultado;


}
echo Miarray($numero);
echo "<br/>";
sort($numero);
//Mostrar longitud 

echo count($numero);
$busqueda = 2;
if(array_search($busqueda , $numero))
{
   echo "el nunero existe";

}
else 
{
   echo "no existe";
}
if(empty($search))
{
  echo "lo encontrado $search"; 

}else
{
   echo "No se encontro";
}



?>
