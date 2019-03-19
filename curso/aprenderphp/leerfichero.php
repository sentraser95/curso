<?php
/*
//abrir archivo
$fichero = fopen("fichero_texto.txt", "a+");

//leer 
while(!feof($fichero))
{
$contenido = fgets($fichero);

echo $contenido"<br/>"; 

}

//Escribir 
fwrite($fichero , "estoy");
//cerrar archivos
fclose($fichero);
*/
//copy('fichero_texto.txt' , 'fichero_copiado.txt') or die ("Error");

//renombrar 

//rename('fichero_copiado,txt','chido');

//eliminar 

unlink('fichero.txt') or die ("Error al eliminar");

if(file_exists("fichero_texto.txt")){
echo "Archivo existe";
}else{
   echo "no existe";
}

?>
