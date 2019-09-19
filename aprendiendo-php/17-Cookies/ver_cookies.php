<?php

/* 
 Para mostrar el valor de las cookies, tengo que usar $_COOKIE, una variable superglobal;
 es una array asociativo. 
 */

if(isset($_COOKIE['micookie'])){
    echo '<h1>'.$_COOKIE['micookie'].'</h1>';
}else{
   echo '<h1>NO EXISTE LA COOKIE</h1>';
}

if(isset($_COOKIE['unyear'])){
    echo '<h1>'.$_COOKIE['unyear'].'</h1>';
}else{
    echo '<h1>NO EXISTE LA COOKIE</h1>';
}
?>
<a href="crear_cookies.php">Crear mis galletas</a>
<a href="borrar_cookies.php">Borrar mis galletas</a>