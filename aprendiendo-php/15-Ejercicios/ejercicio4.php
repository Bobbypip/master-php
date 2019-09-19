<?php
/*
Ejercicio 4. Crear un script en php que tenga 4 variables, una de tipo array,
otra de tipo string, otra int y otra booleana y que imprima un mensaje
segun el tipo de variable que sea.
*/

$matriz = array('Hola mundo', 88, TRUE);
$titulo = "master";
$numero = 77;
$verdadero = TRUE;

$o = $verdadero;

if(is_string($o)){
   echo '<h1>STRING</h1>';
}
elseif(is_integer($o)){
   echo '<h1>INTEGER</h1>';
}
elseif(is_bool($o)){
    echo '<h1>BOOL</h1>';
}
elseif(is_array($o)){
    echo '<h1>ARRAY</h1>';
}

?>