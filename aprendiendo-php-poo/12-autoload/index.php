<?php

require_once 'autoload.php';

//$usuario = new Usuario();
//echo $usuario->nombre;
//echo "</br>";
//echo $usuario->email;

//$categoria = new Categoria();
//echo "</br>".$categoria->nombre;

//ESPACIOS DE NOMBRE Y PAQUETES

use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal{
	public $usuario;
	public $categoria;
    public $entrada;

	public function __construct(){
		$this->usuario = new Usuario();
		$this->categoria = new Categoria();
		$this->entrada = new Entrada();
	}

	function getUsuario(){
		return $this->usuario;
	}

	function getCategoria(){
		return $this->categoria;
	}

	function getEntrada(){
		return $this->entrada;
	}

	function setUsario($usuario){
		$this->usuario =  $usuario;
	}

	function setCategoria($categoria){
		$this->usuario =  $categoria;
	}

	function setEntrada($entrada){
		$this->usuario =  $entrada;
	}

}

//Objeto principal
$principal = new Principal();

//var_dump($principal->usuario);
$metodos  = get_class_methods($principal);

$busqueda = array_search('setApellidos', $metodos);
var_dump($busqueda);

//Objeto otro paquete
$usuario = new UsuarioAdmin();
$usuario->informacion();

//Comprobar si existe una clase
//Usar @ para que no muestre los warnings
$clase = @class_exists('PanelAdministrador\Usuario0');
if($clase){
	echo "<h1>La clase SI existe<h1>";
}else{
	echo "<h1>La clase NO existe</h1>";
}

?>