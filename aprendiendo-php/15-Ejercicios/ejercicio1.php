<?php
/*
Ejericio 1. Hacer un programa en PHP que tenga un array con 8 numeros enteros
y que hago lo siguiente:
    
-Recorrerlo y mostrarlo
-Ordenarlos y mostrarlo
-Mostrar su longitud
-Buscar algun elemento(En la URL por GET)
*/

//Show array
function showarray($arr){
    $res = '';
    foreach($arr as $show){
        //$res = $res.$show.'</br>';
        $res .= $show.'</br>'; 
    }
    
    return $res;
}

$names = ['Lorenzo','Ramiro','Carlos','Bere'];

echo '<h1>Recorrer y mostrar</h1>';
echo showarray($names);

echo '<h1>Ordenar y mostrar</h1>';
sort($names);
echo showarray($names);

echo '<h1>Tamano</h1>';
echo count($names);


echo '<h1>Posicion de nombre</h1>';

if(isset($_GET['nom'])){
$result = array_search($_GET['nom'], $names);
if (!empty($result)){
   echo '<h4>El nombre existe en el array con el indice '.$result.'</h4>'; 
}
else{
    if ($_GET['nom'] == 'Bere'){  
        echo '<h4>El nombre existe en el array con el indice '.$result.'</h4>';
     }
     else{
         echo '<h4>El nombre no existe en el array</h4>';
     }
     }
}
else
{
    echo '<h4>No one name is requiered to be searched</h4>';
}
?>