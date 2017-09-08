<?php
//include("conexion.php");
require_once "conexion.php"; 
include("registrar.php");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title>PHP Estructurado Basico</title>
</head>

<body>
<center>
<h1>Ingresar Datos</h1>
<form name="frm" action="" method="post">
	<table class="table table-hover">
		
		<tr class="info"> 
			<td class="info">Documento:</td>
			<td><input type="text" name="documento"></td>
		</tr>
		<tr class="info">
			<td class="info">Nombre:</td>
			<td><input type="text" name="nombre"></td>
		</tr>
		<tr class="info">
			<td class="info">Apellido:</td>
			<td><input type="text" name="apellido"></td>
		</tr>
		<tr class="info">
			<td class="info">telefono:</td>
			<td><input type="text" name="telefono"></td>
		</tr>
		<tr>
			<td colspan="2">
			<center><button class="btn btn-primary" type="submit" >Enviar</button></center>
			</td>
		</tr>
	</table>


</form>

<?php 
$sql = "select * from customers";
$query = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_array($query)) {
	
	echo '<li>Documento: '.$resultado['document'].', Nombre: '.$resultado['name'].',Apellido: '.$resultado['last_name'].',Telefono: '.$resultado['telephone'].'</li>' ;
	}
 ?>
 
</body>
</center>
</html>