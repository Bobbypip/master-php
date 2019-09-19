<?php
/*
Ejercicio 3. Hacer una interfaz de usuario (formulario) con dos inputs y 4 botones
uno para sumar, restar, dividir y multiplicar.
*/
$result = false;

if(isset($_POST['number1']) && isset($_POST['number2'])){

    $n1 = floatval($_POST['number1']);
    $n2 = floatval($_POST['number2']);
    
    if(isset($_POST['+'])){
        $result = $n1 + $n2;
    }
    if(isset($_POST['-'])){
        $result = $n1 - $n2;
    }
    if(isset($_POST['*'])){
        $result = $n1 * $n2;
    }
    if(isset($_POST['/'])){
        $result = $n1 / $n2;
    }
}
?>
<!DOTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title> CALCULADORA </title>  
    </head>
    <body>
        <h1>CALCULADORA</h1>
        <form action="" method="POST">
            NUMBER 1:</br>
            <input type="text" name="number1"></br>
            NUMBER 2:</br>
            <input type="text" name="number2"></br>
            <input type='submit' name='+' value='+' />
            <input type='submit' name='-' value='-' />
            <input type='submit' name='*' value='*' />
            <input type='submit' name='/' value='/' />
        </form>
        
        <?php
        if($result != false):
            echo 'El resultado es :'.$result;
        endif ?>
    </body>
 </html>     