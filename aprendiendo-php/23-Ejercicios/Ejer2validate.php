<?php

function validate($email, $pass){
  
$error = 'Missing_Values';

if (!empty($email) && !empty($pass)){
    $error = 'ok';
    
    //Validation email
    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
       $error = 'email';
    }
    
    //Validation variable
    if(empty($pass) || strlen($pass)<5){
       $error = 'password';
    }
    
}else{
    $error = 'Missing_Values';
}
  
return $error;
}

$result = validate($_GET['email'], $_GET['pass']);
//var_dump($result);

if($result != 'ok'){
   header('Location:Ejercicio2.php?error='.$result); 
}
?>

<!DOCTYPE HTML>
<html lang='es'>
    <head>
        <meta charset='utf-8' />
        <title>Validacion de formularios PHP</title>
    </head>
    <body>
        <?php if($result == 'ok'):?>
        <h1>Datos validados correctamente</h1>
            <p><?=$_GET['email']?></p>
            <p><?=$_GET['pass']?></p>
        <?php endif; ?>
    </body>
</html>