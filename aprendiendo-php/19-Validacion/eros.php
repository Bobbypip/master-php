<?php

var_dump($_POST);

var_dump(empty($_POST['pass']));

if(/*empty($_POST['nombre']) && empty($_POST['apellidos']) &&
   empty($_POST['edad']) && empty($_POST['email']) &&*/
   empty($_POST['pass'])){
    
   $nombre = $_POST['nombre'];
   $apellidos = $_POST['apellidos'];
   $edad = $_POST['edad'];
   $email = $_POST['email'];
   $pass = $_POST['pass'];
   
   echo 'EROS'; 
    
}else{ 
    
   echo 'Wiii';
}

?>

<!DOCTYPE HTML>
<html lang='es'>
    <head>
        <meta charset='utf-8' />
        <title>Validacion de formularios PHP</title>
    </head>
    <body>
        
    </body>
</html>