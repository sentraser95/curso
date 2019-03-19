<?php

/*

comprabar si la variable esta vacia y ponerla en muyusculas y en negritas.


*/
$texto = "";
if(empty($texto))
{
    $texto = "texto";
    //convertir el texto a mayusculas
    $textoM = strtoupper($texto) ;
    echo "<strong>$textoM<strong>";
}


?>
