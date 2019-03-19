<?php

$server = "127.0.0.1";
$user = "golden";
$pass ="password";
$db = "blog";
$link = mysqli_connect($server,$user , $pass , $db);
if(mysqli_connect_errno())
{
  echo "Error en la conexion";
}
else 
{
   echo "Conexion exitosa";
}
mysqli_query($db ,"SET NAMES 'utf8'");

session_start();
?>
