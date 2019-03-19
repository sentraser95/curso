<?php
 require_once '/var/www/html/curso/aprenderphp/include/conexion.php';
$query = "SELECT * FROM usuarios WHERE email = 'sentraser99@sentra.com'";
$connect = mysqli_query($link , $query);
$contar = mysqli_num_rows($connect);
$mostrar = mysqli_fetch_assoc($contar);
var_dump($mostrar);

/*
//recoger datps de formularios
if(isset($_POST))
{
  $correo = $_POST['email2'];
  $ppassword = $_POST['pass2'];
  $query = "SELECT * FROM usuarios WHERE email = '$email'";
  $connect = mysqli_query($link , $query);

}
*/


 ?>
