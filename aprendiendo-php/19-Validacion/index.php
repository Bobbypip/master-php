<!DOCTYPE HTML>
<html lang='es'>
    <head>
        <meta charset='utf-8' />
        <title>Validacion de formularios PHP</title>
    </head>
    <body>
        <h1>Validar formularios en PHP</h1>
        
        <?php
        
            if(isset($_GET['error'])){
             $error = $_GET['error'];
             
             if($error == 'faltan_valores'){
                 echo '<strong style ='.'color:red'.'>Introduce todos los datos en todos los campos del formulario</strong>';
             }
             if($error == 'nombre'){
                 echo '<strong style ='.'color:red'.'>Introduce bien el nombre</strong>';
             }
             if($error == 'apellidos'){
                 echo '<strong style ='.'color:red'.'>Los apellidos no son correctos</strong>';
             }
             if($error == 'edad'){
                 echo '<strong style ='.'color:red'.'>Introduce una edad correcta</strong>';
             }
             if($error == 'email'){
                 echo '<strong style ='.'color:red'.'>El correo es erroneo</strong>';
             }
             if($error == 'pass'){
                 echo '<strong style ='.'color:red'.'>Introduce una contrasena de 5 letras</strong>';
             }
            }
        ?>
        
        <form method="POST" action='procesar_formulario.php'>
            <label for='nombre'> Nombre</label></br>
            <input type="text" name='nombre' require="required" pattern="[a-zA-Z]+"></br>
            
            <label for='apellidos'> Apellidos</label></br>
            <input type="text" name='apellidos' required="required" pattern="[a-zA-Z]+" ></br>
            
            <label for='edad'> Edad</label></br>
            <input type="number" name='edad' required="required" pattern="[0-9]+"></br>
            
            <label for='email'> Email</label></br>
            <input type="text" name='email' required="require"></br>
            
            <label for='pass'> Contrasena</label></br>
            <input type="password" name='pass' required="require" minlength="5"></br>
            
            <input type='submit' value='Enviar' />
        </form>
    </body>
</html>