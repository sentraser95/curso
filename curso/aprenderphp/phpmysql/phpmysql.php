<?php
//conectar BD
$host = "127.0.0.1";
$user = "golden";
$pass = "password";
$databases = "phpmysql";
$conexion  = mysqli_connect($host,$user,$pass , $databases);
//comprabar la conexion
if(mysqli_connect_errno())
{
  echo "La conexion la BD ha fallado".mysqli_connect_errno();

}else{
     echo "conexion chida";
}
// consulta para configuara la codificacion de caracteres

mysqli_query($conexion, "SET NAMES 'utf8'");

//consulta SELECT 


//$result =mysqli_query($conexion , "SELECT * FROM notas");

   

//while($notas =  mysqli_fetch_assoc($result)) {

//echo "<h2>".$nota['titulo']."</h2>";

   
//}


//Insertar en la base datis desde PHP 


$sql= "INSERT INTO notas VALUES(null, 'Nota desde PHP','Estos es una nota PHP','green')";
$ins = mysqli_query($conexion , $sql);
if($ins)
 {

  echo "datos correctos ";
 }else
  echo "Datos incorrectos error".mysql_error($conexion);

?>
