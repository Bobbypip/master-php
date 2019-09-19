<?php
/*
//CONDICIONALES

if(condicion){
 instrucciones
 }
 else{
 otras instrucciones
 }
 
 //OPERADORES DE COMPARACION
 == igual 
 === identico
 !=diferente
 <> diferente
 !== no identico
 < menor que
 > mayor que 
 <= menor o igual que
 >= mayor o igual que

 //OPERADORES LOGICOS
 && AND Y
 || OR O
 ! NOT NO
 
  
 
 */

//Ejemplo 1
$color = 'verde';

if($color == 'rojo'){
    echo 'EL COLOR ES ROJO';
}
else{
    echo 'EL COLOR NO ES ROJO';
}

echo'<br>';

//Ejemplo 2
$year = 2028;
if($year != 2019){
    echo 'Es un ano diferente a 2019';
}
else{
    echo 'No estamos en el 2019';
}

//Ejemplo 3
$nombre = 'David Extremadura';
$ciudad = 'Madrid';
$continente = 'Asia';
$edad = 34;
$mayoria_edad = 18;

if($edad >= $mayoria_edad){
  echo '<h1>'.$nombre.'es mayor de edad'.'</h1>';
  if ($continente == 'Europa'){
    echo '<h1>'.'Y es de'.$ciudad.'</h1>';}
        else {  echo 'No es Europeo';}
}
        
else { echo '<h1>'.$nombre.'NO es mayor de edad'.'</h1>';}
echo '<br>';
echo '<hr>';

//Ejemplo 4
$dia = 7;
/*
if($dia == 1){echo 'Es lunes';}
else{if($dia == 2){echo 'Es martes';}
     else{if($dia == 3){echo 'Es miercoles';}
          else{if($dia == 4){echo 'Es jueves';} 
               else{if($dia == 5){echo 'Es viernes';}
                    else{echo 'Es fin de semana';}                  
       }
      }  
     }
    }
 */
if($dia == 1){
    echo 'Lunes';
}elseif($dia == 2){
    echo 'Martes';
}elseif($dia == 3){
    echo 'Miercoles';
}elseif($dia == 4){
    echo 'Jueves';
}elseif($dia == 5){
    echo 'Viernes';
}else{ echo 'Es finde';}

echo '<br>';
echo '<hr>';

//Ejemplo 5
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 222;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo 'Esta en edad de trabajar';
}else{
    echo 'No puede trabajar';
}
echo '<br>';
echo '<hr>';

$pais = 'Me';

if($pais == 'Mexico' || $pais == 'Espana' || $pais == 'Colombia'){
   echo 'En este pais se habla espanol';
}
else{echo 'No se habla espanol';}

echo '<br>';
echo '<hr>';

//SWITCH
$dia = 45;

switch ($dia){
    case 1:
        echo 'Lunes';
        break;
    case 2:
        echo 'Martes';
        break;
    case 3:
        echo 'Miercoles';
        break;
    case 4:
        echo 'Jueves';
        break;
    case 5:
        echo 'Viernes';
        break;
    default :
        echo 'Finde';
    
              }
echo '<br>';
echo '<hr>';

 //GOTO
goto marca;
echo '<h3>Instruccion 1</h3>';
echo '<h3>Instruccion 2</h3>';
echo '<h3>Instruccion 3</h3>';
echo '<h3>Instruccion 4</h3>';

marca:
    echo 'Me he saltado 4 echos';
?>
