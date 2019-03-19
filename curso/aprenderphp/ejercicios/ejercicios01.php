<?php

/*

Crea una sesion que aumente su vallor en uno o dismuya en uno en funcion de si el para get counter esta a uno o a cero

  
*/

session_start();
if(!isset($_SESSION["numero"])){

$_SESSION =0 
}

?>
<h1>El valor de la sesion es : <?=$_SESSION['numero'] ?></h1>
<a href="ejercicios01.php?counter=1">Aumentar el valor</a> <br/>
<a href="ehercicios01.php?counter=0">Dismunuir el valor</a>
