<?php
//Contenedor de informacion que no puede variar

define('nombre','Victor Robles');
define('web', 'Victorrobles.es');

echo '<h1>'.nombre.'</h1>';
echo '<h1>'.web.'</h1>';

//Variable
$web = 'Victorroblesweb.ed/academy';
$web = 'Victorroblesweb.ed/cursos';
echo '<h1>'.$web.'</h1>';

//Constantes predefinidas
echo php_uname();
?>