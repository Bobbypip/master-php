<?php

class Usuario{
	
	public $nombre;
	public $email;

	public function __construct(){
		echo "Destruyendo el objeto creada</br>";
		$this->nombre = "Victor Robles";
		$this->email = "victor@victor.com";
	}

	public function __toString(){
		return "Hola, {$this->nombre}, estas registrado con {$this->email}</br>";
	}

	public function __destruct(){
		echo "</br>Destruyendo el objeto</br>";
	}
}

$usuario = new Usuario();
echo $usuario;
echo $usuario->email;
?>