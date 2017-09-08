<?php
ini_set('display_errors', TRUE);
error_reporting(E_ALL);

require_once("conexion.php");

class Customers{
		private $document;
		private $name;
		private $lastname;
		private $telephone;

		const TABLA = "customers";

		public function get_document(){
			return $this->document;
		}
		public function get_name(){
			return $this->name;
		}
		public function get_lastname(){
			return $this->lastname;
		}
		public function get_telephone(){
			return $this->telephone;
		}

		public function set_document($doc){
			$this->document=$doc;
		}
		public function set_name($name){
			$this->name=$name;
		}
		public function set_lastname($lastname){
			$this->lastname=$lastname;
		}
		public function set_telephone($telephone){
			$this->telephone=$telephone;
		}

		//$document,$name,$last_name,$telephone=''
		public function __construct(){
			/*$this->document=$document;
			$this->name=$name;
			$this->last_name=$last_name;
			$this->telephone=$telephone;*/
		}

		public function save_customer(){

			$cnx = new Conexion();
			$sql = "insert into ".self::TABLA." (document, name, lastname, telephone) values (?,?,?,?)";

			$consulta = $cnx->prepare($sql);
			$valores = array($this->document, $this->name, $this->lastname, $this->telephone);
			$consulta->execute($valores);

			$error = $consulta->errorInfo();
			if ($error[0] != '00000'){

				echo 'PDO error detectado: <br>';
				echo $error[2];

			/*
			array(
			0 => codigo, // 00000
			1 => otrocodigo,
			2 => error_descripcion
			);
			*/
			}// close if

			$cnx = null;

		}// cierre metodo


	}// ciewrre clase
?>