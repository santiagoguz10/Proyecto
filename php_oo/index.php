<?php
//include("conexion.php");
require_once "customers.php";
if (isset($_POST['documento']) && !empty($_POST['documento']) && isset($_POST['nombre']) && !empty($_POST['nombre']) ) {
	
	$customer = new Customers();

	$customer->set_document($_POST['documento']);
	$customer->set_name($_POST['nombre']);
	$customer->set_lastname($_POST['apellido']);
	$customer->set_telephone($_POST['telefono']);

	$customer->save_customer();

	}
?>
<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

				<!-- Optional theme -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

				<!-- Latest compiled and minified JavaScript -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


			<meta chrset="UTF-8">
	<title>PHP estructurado basico</title>
</head>
<body>

	<<center>
	<h1>CRUD</h1>
	<br><br>
	<form method="post" action="index.php" class="form-inline">
	<div class="form-group">
		
		<input type="number" name="document" placeholder="Documento" class="form-control"><br><br>
		
		<input type="text" name="name" placeholder="Nombre" class="form-control"><br><br>
		
		<input type="text" name="lastname" placeholder="Apellido" class="form-control"><br><br>
		
		<input type="number" name="telephone" placeholder="Telefono" class="form-control"><br><br>

		<input type="submit" name="insert" value="INSERTAR DATOS" class="btn btn-info">

	
	</form>

	<br/>
	<table width="500" border="2" style="background-color: #F9F9F9;" class="table table-bordered">
	
		<tr>
			<th>Documento</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Telefono</th>
			<th>Modificar Registro</th>
			<th>Eliminar Registro</th>
		</tr>
		<tr align="center">
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><a href="index.php?editar=<?php echo $document; ?>" class="btn btn-primary">Modificar</a></td>
			<td><a href="index.php?borrar=<?php echo $document; ?>" class="btn btn-danger">Eliminar</a></td>
		</tr>
	<br><br>
		</tr>
	</table>
	</form>
</body>
</html>


































































