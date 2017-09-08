<?php 
class Cuenta{ 
        private $numero = ''; 

        public function __construct($numero){ 
                $this->numero = $numero; 
        } 

        public function getNumero(){ return $this->numero; } 
} 

class Banco{ 
        private $nombre = ''; 
        private $direccion = ''; 
        private $cuentas = array(); 

        public function __construct($nombre,$direccion){ 
                $this->nombre = $nombre; 
                $this->direccion = $direccion; 
        } 

        public function agregarCuenta($numeroDeCuenta){ 
                $this->cuentas[] = new Cuenta($numeroDeCuenta); 
        } 
} 

$banco = new Banco('Nacion', 'Lejos de aca'); 
$banco->agregarCuenta(123); 
$banco->agregarCuenta(1234); 
$banco->agregarCuenta(12345);  
?>