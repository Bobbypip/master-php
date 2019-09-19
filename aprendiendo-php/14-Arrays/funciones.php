<?php

$cantantes = ['2pac', 'Drake', 'Jennifer Lopez', 'Alfredo'];
$numeros = [1,2,5,8,3,4];

//Ordenar
asort($numeros);
//var_dump($numeros);

//Anadir elementos al carry
$cantantes [] = 'Natos';
array_push($cantantes, 'Waor');

//Eliminar elementos array
array_pop($cantantes);
unset($cantantes[2]);

//Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];

//Dar la vuelta 
var_dump(array_reverse($cantantes));

//Buscar dentro de un array
$resultado = array_search('Alfredo', $cantantes);
var_dump($resultado);

//Contar numero de elementos
echo sizeof($cantantes);
?>
