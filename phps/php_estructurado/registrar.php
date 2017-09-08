<?php

if (isset($_POST['documento']) && !empty($_POST['documento'])
	&& isset($_POST['nombre']) && !empty($_POST['nombre'])
	&& isset($_POST['apellido']) && !empty($_POST['apellido']) ) 
{

$sql = "insert into customers (document, name, last_name, telephone)
		value ('".$_POST['documento']."', '".$_POST['nombre']."', '".$_POST['apellido']."','".$_POST['telefono']."')";

$send = mysqli_query($conn, $sql);
} 