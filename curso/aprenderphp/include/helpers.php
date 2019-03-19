<?php


function  showError($error , $campo) {
           $alert = '';
if(isset($error[$campo]) && !empty($campo)) {
   
    $alert = "<div class='alerta alerta-error'>".$error[$campo].'</div>';
}
return $alert;

}
function borrarErrores() {
$borrado = false ;
if(isset($_SESSION['error']))
{
 $_SESSION['error'] = null; 
$borrado = session_unset($_SESSION['errores']);
}
if(isset($_SESSION['completado']))

{
$_SESSION['completado'] = null;
 session_unset($_SESSION['completado']);

}

  return $borrado;
}


?>
