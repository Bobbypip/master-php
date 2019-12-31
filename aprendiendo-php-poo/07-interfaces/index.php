<?php

interface Ordenador{

	public function encender();
	public function apagar();
	public function reiniciar();
	public function desfragmentar();
	public function detectarUSB();
}

class iMac implements Ordenador{

	private $modelo;

	function getModelo(){
		return $this->modelo;
	}

	function setModelo($modelo){
		$this->modelo = $modelo;
	}


	public function encender(){ return "on";}
	public function apagar(){return "off";}
	public function reiniciar(){return "restart";}
	public function desfragmentar(){return "des";}
	public function detectarUSB(){return "USB";}
}

$maquintosh = new iMac;
$maquintosh->setModelo("Macbook PRO 2019");
var_dump($maquintosh);

?>