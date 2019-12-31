<?php

Class Coche{

	//Atributos o propiedades (variables)

	//PUBLIC: Podemos acceder desde cualquier lugar, dentro de clase actual
	//	      dentro de calses que hereden esta clase o fuera de la clase
	public $color;

	//PROTECTED: Podemos acceder desde la clase que los definey desde clases
	//			 que herden esta clase
	protected $marca;

	//PRIVATE: Unicamente se puede acceder desde esta clase
	private $modelo;

	public $velocidad;
	public $caballaje;
	public $plazas;

	//Métodos, son acciones que hace el objeto (antes funciones)

	public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas){
		$this->color = $color;
		$this->marca = $marca;
		$this->modelo = $modelo;
		$this->velocidad = $velocidad;
		$this->caballaje = $caballaje;
		$this->plazas =$plazas;
	}

	public function getColor(){
		//This: Busca en esta clase la propiedad x
		return $this->color;
	}

	public function setColor($color){
		$this->color = $color;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function getModelo(){
		return $this->modelo;
	}

	public function setMarca($marca){
		$this->marca = $marca;
	}

	public function acelerar(){
		$this->velocidad++;
	}

	public function frenar(){
		$this->velocidad--;
	}

	public function getVelocidad(){
		return $this->velocidad;
	}

	public function mostrarInformacion(Coche $miObjeto){

		if(is_object($miObjeto)){
			$informacion  = "<h1>Informacion del coche</h1>";
			$informacion .= "Color: ".$miObjeto->color;
			$informacion .= "</br>Modelo: ".$miObjeto->modelo;
			$informacion .= "</br>Velocidad: ".$miObjeto->velocidad;
		}else{
			$informacion = "Tu dato es este: $miobjeto";
		}
		return $informacion;
	}

}

?>