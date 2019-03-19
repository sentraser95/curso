<?php


/*

Variables locales : Son la que estan adentro de una funcion y solo estan disponibles a dentro , a no hacer que hagamos un return
 
Variables globales : Son las que se declaran fuera de una funcion y estan a dentro o fuera de una funcion

*/

//variable goblal

$frase = "Frase";

function holamundo()
 {
               global $frase;
                echo $frase;
 }

 holamundo();

?>

