<?php

//Debugear
$nombre = 'Victor Robles';
var_dump($nombre);

echo date('d-m-y');
echo '<br>';
echo time();

//Matematicas
echo '<br>';
echo 'Raiz cuadrada de 10: '.sqrt(10);

echo '<br>';
echo 'Numero aleatorio entre 10 y 40: '.rand(10,40);

echo '<br>';
echo 'Numero pi: '.pi();

echo '<br>';
echo 'Redondear: '.round(7.891234, 3);

//Mas funciones generales
echo '<br>';
echo gettype($nombre);
echo '<br>';

//Detectar tipado
if(is_string($nombre)){
    echo 'Esa variable es un string';
}

echo'<br>';
if(!is_float($nombre)){
    echo "La variable nombre no es un numero con decimales";
}

//Comprobar si existe una variable
echo "<br/>";
if(isset($edad)){
    echo "La variable existe";
}
else{
    echo "La variable no existe";
}

//Limpiar espacios
echo "<br/>";
$frase = "    mi contenido    ";
var_dump(trim($frase));

//Eliminar variables / indices
$year = 2020;
unset($year);

//var_dump($year);

//Comprobar variable vacia
$texto = TRUE;

if(empty($texto)){
    echo 'La variable esta vacia';
}
else{
    echo 'La variable texto TIENE CONTENIDO';
}
echo "<br/>";

//Contar caracteres de una cadena de string
$cadena = 'ss';
echo strlen($cadena);
echo "<br/>";

//Encontrar caracter
$frase = 'La vida es bella';
echo strpos($frase, 'e');
echo "<br/>";

//Reemplazar palabras de un string
$frase = str_replace('vida', 'moto',$frase);
echo $frase;
echo "<br/>";

//Mayuscuslas y minusculas
echo strtolower($frase);
echo "<br/>";
echo strtoupper($frase);

?>