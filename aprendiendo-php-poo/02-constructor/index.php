<?php

require_once 'coche.php';

$coche = new Coche("Amarillo", "Renault", "CLio", 150, 200, 5);
$coche1 = new Coche("Verde", "Seat", "Panda", 250, 200, 5);

$coche->color = "ROSA";
$coche->setMarca("Audi");

echo $coche->mostrarInformacion($coche);

//var_dump($coche->getModelo());
//var_dump($coche);
?>