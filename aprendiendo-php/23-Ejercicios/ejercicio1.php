<?php
/*Ejercicio 1. Crear una sesion que aumente su valor en uno o disminuya en uno 
en funcion de si el parametro get counter esta a uno o cero.
 */

//Session start
session_start();

if(!isset($_SESSION['var'])){
    $_SESSION['var'] = 0;
}

if(isset($_GET['param'])){
    if($_GET['param'] == 1){
        $_SESSION['var'] ++;
    }
    if($_GET['param'] == 0){
        $_SESSION['var'] --;
    }
}else{
    echo '<h1>Introduce a variable in GET<h1>';
}

?>

<h1>SESSION VALUE: <?=$_SESSION['var']?></h1>
<a href="ejercicio1.php?param=1">Incrase the value</a></br>
<a href="ejercicio1.php?param=0">Decrease the value</a>
