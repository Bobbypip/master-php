<?php
//BUCLE WHILE
//ESTRUCTURA DE CONTROL QUE ITERA O REPITE LA EJECUCION DE UNA SERIE DE INSTRUCCIONES
//EN BASE A UNA CONDICION

/* 
 * while(condicion){
 * bloque de instrccion
 * otra instruccion
 * }
 */
$numero = 0;
while($numero <= 100){
    echo $numero;
    
    if($numero != 100){
        echo ', ';
    }
        $numero++;
}

echo "<hr>";

//Ejemplo tabla de multiplicar
if(isset($_GET['numero'])){
    //Cambiar tipo de dato
    $numero =(int)$_GET['numero'];
}else{
    $numero = 1;
}

echo '<h1>'.'Tabla de multiplicar de numero '.$numero.'</h1>';

$contador = 1;
while($contador <= 10){
    echo $numero.' x '.$contador.' = '.($numero*$contador).'<br>';
    $contador++;
}
 
/*Do While
Do{
    //Bloque de instrucciones
}while(condicion);
*/

echo '<hr>';

$edad = 18;
$contador = 1;

do{
    echo 'Tienes acceso al local privado'.$contador.'<br>';
    $contador++;
}while($edad >= 18 && $contador <= 10);
?>
