<?php 

/*

cookie : es una fichero que se almacena informacion del usuario que visita la web , con el fin de recordar datos o restrear cierta informacion. 

*/

//Crear cookie 

//setcookie("nombre" , "valor solo pues ser texto" ,caducidad , ruta , dominio);


//cookie basica
setcookie("migalleta" , "valor de mi galleta");

//cookie con expiracion 

setcookie("ayear" , "valor de mi cookie de 365" , time()+(60*60*24*365));


//mustrar el valor de la cookies , tengo qye usar $_cookie , son variables superglobal y es un array asosiativo 
 

if(isset($_COOKIE['migalleta'])){

echo "<h1>".$_COOKIE['migalleta']."<h1>";

}else 

{
   echo "No existe";
}

//borrar cookie 
if(isset($_COOKIE['migalleta'])){

unset($_COOKIE['migalleta']);
 
}else
{
   echo "se ha borrado";
}

?>
