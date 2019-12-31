<?php
require_once '../vendor/autoload.php';

$foto_original = 'mifoto.jpg';
$guardar_en = 'fotomodificada.png';

$thumb = new PHPThumb\GD($foto_original);
//Redimensionar
$thumb->resize(250, 250);

//Recortar
$thumb->cropFromCenter(250, 100);

$thumb->show();
$thumb->save($guardar_en, 'png');

?>