<?php
/*
Ejercicio 4. Recoger 2 numeros por la url(parametros GET) y hacer todas las 
operaciones basicas de una calculadora(suma, resta, multiplicacion y division)
de esos dos numeros.
 */

if(isset($_GET['numero1'])&&isset($_GET['numero2'])){
    $numero1 =(float)$_GET['numero1'];
    $numero2 =(float)$_GET['numero2'];
    
    //var_dump($numero1);
    //var_dump($numero2);
    
    echo '<h1>CALCULADORA</h1>';
    echo 'Suma: '.($numero1+$numero2).'<br>';
    echo 'Resta: '.($numero1-$numero2).'<br>';
    echo 'Multiplicacion: '.($numero1*$numero2).'<br>';
    echo 'Division: '.($numero1/$numero2).'<br>';
}
else{
    echo '<h1>Introduce parametros por la URL</h1>';
}
?>