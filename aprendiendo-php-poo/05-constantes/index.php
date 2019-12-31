<?php

class Usuario{

	const URL_COMPLETA = "http//localhost";
	public $email;
	public $password;

	function getEmail(){
		return $this->email;
	}

	function getPassword(){
		return $this->password;
	}

	function setEmail($email){
		$this->email = $email;
	}

	function setPassword($password){
		$this->password = $password;
	}

}

$usuario = new Usuario;
//Para acceder a las CONSTATES se hace a traves de como se haria para una var 
//estatica

echo Usuario::URL_COMPLETA;
echo $usuario::URL_COMPLETA;
var_dump($usuario);

?>