<?php

/*
FUNCIONES:
Una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto
y que pueden reutilizarse invocando a la funcion tantas veces como queramos


function nombreDeMiFuncion(){
    BLOQUE / CONJUNTO DE INSTRCCIONES
}

nombreDeMiFuncion(parametro);
 */

/*Inicio
//Ejemplo1 1
function muestraNombres(){
    echo 'Victor Robles <br>';
    echo 'Antonio Robles <br>'; 
    echo 'Miguel Robles <br>';
    echo 'Jesus Robles <br>';
    echo '<hr>';
}

//Invocar
muestraNombres();
muestraNombres();
muestraNombres();

//Ejemplo 2

function tabla($numero){
    echo '<h3>'.'Tabla de multiplicar del numero: '.$numero.'</h3>';
    for($i = 1; $i <= 10; $i++){
        $operacion = $numero * $i;
        echo $numero.' X '.$i.' = '.$operacion.'<br>';
    }
}

if(isset($_GET['numero'])){
 tabla ($_GET['numero']);
 tabla (2); 
}
else{
    echo '<h3>'.'Introduce un numero'.'</h3>';
}

for ($t=1; $t<=10; $t++){
    tabla ($t);
}
 */

function calculadora($numero1, $numero2, $negrita = false){
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    
    $cadena_texto = '';
    
    if ($negrita){
        $cadena_texto.= '<h1>';
    }
    
    $cadena_texto.= 'Suma: '.$suma.'<br>';
    $cadena_texto.= 'Resta: '.$resta.'<br>';
    $cadena_texto.= 'Multi: '.$multi.'<br>';
    $cadena_texto.= 'Division: '.$division.'<br>';
    
    if ($negrita){
        $cadena_texto.= '</h1>';
    }
    
    $cadena_texto.= '<hr>';
    
    return $cadena_texto;
}

echo calculadora(3,4,true);

// Ejemplo 4

function getNombre($nombre){
    $texto = 'El nombre es: '.$nombre;
    return $texto;
}

function getApellidos($apellidos){
    $texto = 'Los apellidos son: '.$apellidos;
    return $texto;
}

function devuelveElNombre($nombre, $apellidos){
    $texto = getNombre($nombre)
             .'<br>'.
             getapellidos($apellidos);
    return $texto;
}

echo devuelveElNombre('Victor', 'Robles');

?>