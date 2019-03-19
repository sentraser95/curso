<?php

/*

Una sesion almacena y persistir datos del usuario mientras navega en sitio web mientras cierrra sesion.

*/

//Inisia la sesion 

session_start();
//variable local 

$variable_n = "Soy una cadena";

//varible de sesion 

$_SESSION['varible_persistente'] = "Hola sesion activa";

echo $varble_n;
echo  $_SESSION['varible_persistente']; 

?>
