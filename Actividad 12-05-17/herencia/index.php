<?php

class Primera{
	public $id=17;
	protected $nombre="Santiago Guzman Rodriguez";

	public function saludo ($palabra){
		echo $palabra;
	}
}

	class Segunda extends Primera {
		public function obtenerNomnbre(){
			echo $this->nombre;
			echo $this->id;
		}
	}


	$segundaClase=new Segunda;
	echo $segundaClase->obtenerNomnbre();
?>



