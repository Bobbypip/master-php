<?php
/*
Ejercicio 2.
1. Una funcion
2. Validar un email con filter_var
3. Recoger variable por get y validarla
4. Mostrar el resultado
*/

?>
<!DOCTYPE HTML>
<html lang='es'>
    <head>
        <meta charset='utf-8' />
        <title>Validacion de formularios PHP</title>
    </head>
    <body>
        <h1>Ejercicio 2, Validar email y variable por get</h1>
        
        <form action="Ejer2validate.php" method="GET">
            Email:</br>
            <input type="text" name="email"></br>
            Password:</br>
            <input type="password"  name="pass"></br>
            <input type="submit" value="Send">
        </form>
    </body>
</html>


<?php
if(isset($_GET['error'])){
    echo 'Error: '.$_GET['error'];
}
?>