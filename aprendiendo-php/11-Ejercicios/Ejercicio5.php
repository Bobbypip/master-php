<?php
/*
Ejercicio 5. Hacer un programa que muestre todos los numeros entre dos
o mas numeros que nos lleguen por la URL($_GET)
*/

if(isset($_GET['numero1'])&&isset($_GET['numero2'])){
    $numero1 =(int)$_GET['numero1'];
    $numero2 =(int)$_GET['numero2'];
    }
    
$cent = 1;
 
 if($numero1 > $numero2){
     $mayor = $numero1;
     $menor = $numero2;
     $cent = 0;
 }elseif($numero1 < $numero2){
     $menor = $numero1;
     $mayor = $numero2;
     $cent = 0;
 }elseif($numero1 == $numero2) {
    echo '<h1>Numeros iguales</h1>';
}

if($cent == 0){ $cent = 1;
for($i = $menor; $i <= $mayor; $i++){
    
    echo $i.'<br>';
    
}}
?>