<?php

/*FOR
for(variable_contador; condicion; incremento_contador){
    Bloque de instrucciones
}
*/

/*
$resultado = 0;
for($i = 0; $i <= 100; $i++){
    
    //$resultado = $resultado + $i;
    $resultado += $i;
    echo '<p>'.$resultado.'</p>';
}
echo '<h1>'.'El resultado es: '.$resultado.'</h1>';
*/

//Ejemplo tabla de multiplicar
if(isset($_GET['numero'])){
    //Cambiar tipo de dato
    $numero =(int)$_GET['numero'];
}else{
    $numero = 1;
}

echo '<h1>'.'Tabla de multiplicar de numero '.$numero.'</h1>';

for($contador = 1; $contador <= 10; $contador++){
    
    if ($numero == 5){
        echo 'No se pueden mostrar estas operaciones prohibidas';
        break;
    }
    echo $numero.' x '.$contador.' = '.($numero*$contador).'<br>';
}
?>