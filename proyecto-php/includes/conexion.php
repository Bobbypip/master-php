<?php
//conexion
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'blog_master';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

//Base de datos funcionara con � y tildes
mysqli_query($db, "SET NAMES 'utf8'");

//Ininiar la sesi�n
if(!isset($_SESSION)){
	session_start();
}
?>