<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Variable global
$frase = 'Ni los genios son tan genios, ni los mediocres tan mediocres';

//echo $frase;

function holamundo(){
    global $frase;
    
    echo '<h1>'.$frase.'</h1>';
    
    $year = 2019;
    echo '<h1>'.$year.'</h1>';
    
    return $year;
}

//echo holamundo();

// Funciones variables

function buenosDias(){
    return 'Hola! buenos dias :)';
}

function buenasTardes(){
    return 'Hey! que tal ha ido la comida??';
}

function buenasNoches(){
    return '<h1>Te vas a dormir ya?, Buenas noches</h1>';
}

$horario = 'Noches';
$miFuncion = 'buenas'.$horario;

echo $miFuncion();
?>