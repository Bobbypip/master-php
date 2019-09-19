<?php
/*
Crear un array con el contenido de la tabla:
ACCION  AVENTURA            DEPORTES
GTA     ASSASINS            FIFA 19
COD     CRASH               PES 19
PUBG    Prince of persia    MOTO GP
    
Cada columna debe ir en un fichero separado (includes).
*/

//Mostrar tabla
function show ($arrd){
    $val = '';
    foreach($arrd as $lol){
            $val.= $lol.'</br>';
    }
    return $val;
}

$tabla = array (
    'accion' => array('gta','cod','pubg'),
    'aventura' => array('assassins','crash','prince'),
    'deportes' => array('fifa 19','pes 19','moto gp')
);

$index = array_keys($tabla);
echo '<table border="2">'.'<tr>';//Inicio tabla
echo '<tr>';
foreach ($index as $value) :
    echo '<td>'.$value.'</td>';
endforeach;
echo '</tr>';
echo '<tr>';
foreach ($tabla as $value):
    echo '<td>'.show($value).'</td>';
endforeach;
echo '</tr>';
echo '</tr>';//Final tabla
?>
