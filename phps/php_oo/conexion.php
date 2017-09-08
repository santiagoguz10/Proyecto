<?php  //PDO
class Conexion extends PDO{

	private $tipo = "mysql";
	private $host = "localhost"; //127.0.0.1
	private $user = "root";
	private $pass = "";
	private $base_datos = "test_php";


	public function __construct(){ //doble guion bajo

		try{

			parent::__construct( $this->tipo.":host=".$this->host.";dbname=".$this->base_datos , $this->user , $this->pass );

		}catch(PDOException $e){

		echo "Ha Surgido Un Error :(" .$e->getMessage();
	}

}


}