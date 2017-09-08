<?php

$host="localhost";
$user="root";
$pass="";
$db="test_php";

//conexion BD
$conn=mysqli_connect($host,$user,$pass);
if (!$conn) {
	die("No se ha conectado a la BD");
}

//seleccion de BD
$bd_selected = mysqli_select_db($conn, $db);
if (!$bd_selected) {
	die("No se ha encontrado la DB");
}
?>