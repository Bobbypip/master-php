<?php
require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2pdf;

$html2pdf = new Html2pdf();

//Recoger la vista a imprimir
ob_start();
require_once 'pdf_para_generar.php';
$html = ob_get_clean();

$html2pdf->writeHTML($html);
$html2pdf->output('pdf_generado.pdf');

?>