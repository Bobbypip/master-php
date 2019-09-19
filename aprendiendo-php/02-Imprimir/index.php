<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Imprimir por pantalla - Master en PHP </title>
    </head>
    <body>
        <h1>Master en PHP - <?php echo'vistorroblesweb.es'; ?></h1> 
        
        <?='Bienvenido al curso mas grande de php'?>
        
        <?php
            //Titular de la seccion
            echo '<h3>Listado de videojuegos:<h3>';
            
            /*Esta es una lista d
             * de video juegos
             * modernos
             */ 
            echo '<ul>'
                .'<li>GTA</li>'
                .'<li>FIA</li>'
                .'<li>Mario Bros</li>'
                .'</ul>';
            
            /*
            echo '<br>HOLA HOLA HOLA</br>';
            */
            
            //Parrafo explicativo
            echo '<p>Esta es toda '.'la lista de'.' juegos - </p>';
        ?>
    </body>
</html>


