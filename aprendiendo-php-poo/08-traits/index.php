<?php

trait Utiliades{

	public function mostrarNombre(){
		echo "<h1> El nombre es ".$this->nombre."</h1>";
	}
}


class Coche{
	public $nombre;
	public $marca;

	use Utiliades;
}

class Persona{
	public $nombre;
	public $apellidos;

	use Utiliades;
}

class VideoJuego{
	public $nombre;
	public $anio;

	use Utiliades;
}

$coche =new Coche();
$persona = new Persona();
$videojuego = new VideoJuego();

$coche->nombre = "Ferrari";
$coche->mostrarNombre();

$persona->nombre = "Antonio";
$persona->mostrarNombre();

$videojuego->nombre = "GTA";
$videojuego->mostrarNombre();

?>