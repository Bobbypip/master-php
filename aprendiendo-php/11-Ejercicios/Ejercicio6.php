<?php
/*
Ejercicio 6. Mostrar una tabla de HTML con las tablas de multiplicar del 1 al 10.
*/

echo '<table border="3">'.'<tr>'; //Inicio de la tabla

echo '<tr>';//Inicio fila 1 de celdas
    for($cabecera = 1; $cabecera <= 10; $cabecera++){
    echo '<td>Tabla del: '.$cabecera.'</td>';//Columna  
    }
echo '</tr>';//Cierre fila 1 de celdas

echo '<tr>';//Inicio fila 2 de celdas
    for($i = 1; $i <= 10; $i++){
    echo '<td>';//Inicio columna
        for ($t = 1; $t <=10; $t++){
           echo $i*$t;
           echo '<br>';
        } 
    echo '</td>';//Cierre columna
    }
echo '</tr>';//Cierre fila 2 de celdas

echo '</tr>';//Fin de la tabla
?>
