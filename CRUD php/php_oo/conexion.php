<?php
class Conexion extends PDO {

private $tipo = "mysql";
private $host = "localhost";
private $user = "root";
private $pass = "";
private $base_datos = "test_php";

public function __construct(){

		try{

			parent::__construct( $this->tipo.":host=".$this->host.";dbname=".$this->base_datos , $this->user , $this->pass);

		}catch(PDOException $e){
			echo "ha ocurrido un error bien percho :(".$e->getMessage();
		}

		}

}
?>