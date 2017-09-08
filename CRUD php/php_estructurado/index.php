<?php
//include("conexion.php");
require_once "conexion.php";
include("registrar.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP estructurado basico</title>
</head>
<body>

<?php
$sql = "select * from customers";
$query = mysqli_query($conn, $sql);

	while($resultado = mysqli_fetch_array($query)){
		echo'<li>Documento: '.$resultado['document'].', Nombre: '.$resultado['name'].'</li>';
	}
?>
	<form name="frm" action="" method="post">
	<table border="1">
		<tr>
			<td>Documento</td>
			<td><input type="text" name="documento"></td>
		</tr>
		<tr>
			<td>Nombre</td>
			<td><input type="text" name="nombre"></td>
		</tr>
		<tr>
			<td>Apellido</td>
			<td><input type="text" name="apellido"></td>
		</tr>
		<tr>
			<td>Telefono</td>
			<td><input type="text" name="telefono"></td>
		</tr>
		<tr>
			<td colspan="2">
			<button type="submit">Enviar</button>
			</td>
		</tr>
	</table>
	</form>
</body>
</html>