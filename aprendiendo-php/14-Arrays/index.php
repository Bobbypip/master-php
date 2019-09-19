<?php
/*
ARRAYS
Un array es una coleccion o un conjunto de datos/valores, bajo un unico nombre.
Para acceder a esos valores podemos usar un indice numero o alfanumerico.
*/

$pelicula = 'Batman';
$peliculas = array('Batman', 'Spiderman', 'El senor de los anillos');
$cantantes = ['2pac', 'Drake', 'Jennifer Lopez'];

//Array asociativo
$personas = array(
    'nombre' => 'Victor',
    'apellidos' => 'Robles',
    'web' => 'victorrobles.es',
);

//echo $_GET['hola'];

//Recorrer con for
echo '<h1>Listado de peliculas</h1>';
echo '<ul>';
for($i=0; $i < count($peliculas); $i++){
    echo '<li>'.$peliculas[$i].'</li>';
}
echo'</ul>';

echo '</br>';
//Recorrer con Foreach
echo '<h1>Lista de cantantes</h1>';

echo '<ul>';
foreach ($cantantes as $cantante){
    echo '<li>'.$cantante.'</li>';
}
echo '</ul>';

 //Arrays multidimensionales

$contactos = array(
    array(
        'nombre' => 'Antonio',
        'email' => 'antonio@antonio.com'
    ),
    array(
        'nombre' => 'Luis',
        'email' => 'luis@luis.com'
    ),
    array(
        'nombre' => 'Salvador',
        'email' => 'salva@salva.com'
    ),
);
foreach ($contactos as $key => $contacto){
    var_dump($contacto['email']);
}
?>
 