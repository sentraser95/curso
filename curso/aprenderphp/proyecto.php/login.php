<?php
require_once '/var/www/html/curso/aprenderphp/include/conexion.php';

if(isset($_POST))
{
  
  
  session_start();
  if(isset($_SESSION['error_login']))
  {
       session_unset();
  }  
  $email = isset($_POST['email']) ? trim($_POST['email']) : false;
  $ppassword =  isset($_POST['pass']) ? $_POST['pass'] : false;
  $consulta = "SELECT * FROM usuarios WHERE email = '$email'";
  $query = mysqli_query($link , $consulta);
  $pass_secure =  password_hash($password,PASSWORD_BCRYPT,['cost'=>4]);
  if($query && mysqli_num_rows($query) == 1)
  {
        $correo_validado = true;
        $user =  mysqli_fetch_assoc($query);
        $verify = password_verify($_POST['pass'] ,$user['password']);
        
        
         if($verify == true)
         {
            
          
           $_SESSION['user'] = $user;
           
           
          
         }else {
            
            $_SESSION['error_login'] = "te falta algo";
            
            
            
              
         }
         


  }else {
    $_SESSION['error_login'] = "te falta algo";
    session_unset($_SESSION['error_login']);
    session_destroy();
  }
header('location: index.php');
}



























?>
