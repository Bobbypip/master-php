<?php
/*
//Abrir archivo
$archivo = fopen('fichero_texto.txt','a+');

//Leer contenido
while(!feof($archivo)){
$contenido = fgets($archivo);
echo $contenido.'</br>';
}

//Escribir en un archivo
fwrite($archivo,'Soy un archivo metido desde php');

//Cerrar archivo
fclose($archivo);
 */

//Copiar
//copy('fichero_texto.txt', 'fichero_copiado.txt') or die('error al copiar');

//Rename
//rename('fichero_copiado.txt', 'archivito_recopiadito.txt');

//Eliminar
//unlink('archivito_recopiadito.txt') or die('error al borrar');

if(file_exists('fichero_texto.txt')){
    echo 'El archivo existe!!';
}else{
    echo 'No existe!!';
}
?>