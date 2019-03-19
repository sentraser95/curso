<?php

/*
   Crea un pograma que tenga 4 tipos de variables un string , int , bolean , array que muestre un mensaje el tipo de varible.
*/

$texto = "m";

$numero = 1234;

$bolean = true;

$matriz= array("hola","como");

if(is_string($texto))
{
     echo "Es string";
}
echo "<br/>";
if(is_integer($numero))
{
    echo "Es numero";
}
echo "<br/>";
if(is_bool($bolean))
{
   echo "Es boleno";
}


?>
