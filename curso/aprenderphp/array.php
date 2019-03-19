<?php

/*

Array 
es una colecion a un conjunto de datos bajo uni nombre y para acceder esos calores podemos unar un indice numero

*/

$nonbres = array("jaime","Andres", "Juan");
echo "<ul>";
for($i = 0; $i< count($nonbres); $i++)
{

   echo "<li>".$nonbres[$i]."</li>";
  
}
echo "</ul>";

foreach($nonbres as $nonbre)
{

  echo $nonbre;
}
//ordenar el array

sort($nonbre);

//añadir elementos en el array

$nonbres[] = "natos";
array_push($nonbres , "lopez");
array_push($nonbres);

?>
