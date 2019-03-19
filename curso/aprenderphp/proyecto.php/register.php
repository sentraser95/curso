<?php

 if(isset($_POST)) {
   require_once '/var/www/html/curso/aprenderphp/include/conexion.php';
   if(isset($_SESSION))
   {
     session_start();
   }
    //mysqli_real_escape_string($link ,$_POST) es para convertir en string los datos
    $email2 = isset($_POST['email2']) ? trim($_POST['email2']) : false ;
    $name = isset($_POST['name']) ? $_POST['name'] : false ;
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : false ;
    $passw2 = isset($_POST['pass2']) ? $_POST['pass2'] : false ;
     //VALIDAR ANTES DE INSERTAR A LA BD
     $error = array();
    if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name))
   {
    $nombre_validate = true;

  } else {
     $nombre_validate = false;

   $error['name'] = "nombre falso";
}
if(!empty($lastname) && !is_numeric($lastname) && !preg_match("/[0-9]/", $lastname))
{
$ap_validate = true;

} else {
 $ap_validate = false;

$error['lastname'] = "apellido incorrecto";
}
if(!empty($email2) && filter_var($email2 , FILTER_VALIDATE_EMAIL))
{
   $email_validado = true;

}else {
     $email_validado = false;
     $error['$email2'] = "correo incorrecto";
}
if(!empty($passw2))
{
   $passw1_validado = true;
   $password_validada = password_hash($passw2 , PASSWORD_BCRYPT , ['cost' => 4]);
   
}else {
   $passw1_validado = false;
  $error['pass2'] = "passwordo incorrecto";
}
$guardar_usurio = false;
if(count($error) == 0)
{
     $guardar_usurio = true;
     
     $query ="INSERT INTO usuarios VALUES (Null , '$name' , '$lastname' , '$email2','$password_validada' , CURDATE());";
     $save =  mysqli_query ($link , $query);
     if($save ){

       $_SESSION['completado'] = "el usuario a completado";

     }else {
       $_SESSION['error']['general'] = "error en la BD";
     }
   //Insertar usuario BDD
}else {
        $_SESSION['error'] = $error;



}



}
  header('location: index.php');


 ?>
