<?php //short_open_tag php.ini
ini_set('display_errors', TRUE);
error_reporting(E_ALL);

require_once("conexion.php");

class Customers {
	private $document;
	private $name;
	private $last_name;
	private $telephone;

	const TABLA = "customers";

	public function get_document(){
		return $this->document;
	}

	public function get_name(){
		return $this->name;
	}

	public function get_last_name(){
		return $this->last_name;
	}

	public function get_telephone(){
		return $this->telephone;
	}

	//getters
	//setters

	public function set_document($document){
		return $this->document = $document;
	}

	public function set_name($name){
		return $this->name = $name;
	}

	public function set_last_name($last_name){
		return $this->last_name = $last_name;
	}

	public function set_telephone($telephone){
		return $this->telephone = $telephone;
	}
	//setters

	//$document, $name, $last_name, $telephone

public function __construct(){
	//$this->document = $document;
	//$this->name = $name;
	//$this->last_name = $last_name;
	//$this->telephone = $telephone;
}
	
	public function save_customer(){

		$cnx = new Conexion();

		$sql = "insert into ".self::TABLA." (document, name, last_name, telephone) values (?,?,?,?)";

		$consulta = $cnx->prepare($sql);
		$valores = array($this->document, $this->name, $this->last_name, $this->telephone);

		$consulta->execute( $valores );

		$error = $consulta->errorInfo();
		//=
		//== (1 == '1')
		//=== (1 === '1')
		if($error[0] != '00000'){

		echo 'PDO error detectado: <br>';
		echo $error[2];

		/*
		array(
		0 => codigo,  // 00000
		1 => otrocodigo,
		2 => error_descripcion
		);
		*/


		}//clase if

		$cnx = null;

	}//cierre metodo

		
}//cierre clase