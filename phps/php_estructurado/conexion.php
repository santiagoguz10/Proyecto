<?php 

$host = "localhost";
$user ="root";
$pass ="";
$db ="test_php";

//concexion BD
$conn = mysqli_connect($host, $user, $pass);

if(!$conn){
	die("No Se Puede Conectar Con La BD.");
}

//Seleccionamos la BD que vamos a trabajar 

$bd_selected = mysqli_select_db($conn,$db);
if (!$bd_selected) {
	die("No Se Ha Encontrado La BD.");
}

