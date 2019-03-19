<?php

/*

   1- Una funcion
   2.- validadr un email con filter_var
   3.- Recoger variable por get y validarla 
   4.- Mostrar el resultado 
*/

function Email($email)
{
   $s = "no valido.";
  if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    $s = "valido":
  }
  return $s;
}
if(isset($_GET['email']))
{
    echo Email($_GET["email"]);
}else
{
  echo "Pasa por get un email";
}

?>
