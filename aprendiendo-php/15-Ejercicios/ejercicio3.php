<?php
/*
Programa que compruebe si una variable esta vacia y si esta vacia,
rellenarla con texto en minusculas y mostrarlo en mayusculas y negrita.
*/

$texto ='ddsdss';

if(empty($texto)){
    $texto = 'hola soy relleno';
    $texto = strtoupper($texto);
    echo '<strong>'.$texto.'</strong>';
}
else{
    echo 'The variable has this content <strong>'.$texto.'</strong>';
}
    
?>