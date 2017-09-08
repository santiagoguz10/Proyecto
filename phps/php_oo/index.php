<?php require_once "customers.php";

 
//comillas dobles analiza contenido del string

//comillas simples impreme literal

if(isset($_POST['documento']) && !empty($_POST['documento']) && isset($_POST['nombre']) && !empty($_POST['nombre']) ){

	$customer = new Customers();

	$customer->set_document($_POST['documento']);
	$customer->set_name($_POST['nombre']);
	$customer->set_last_name($_POST['apellido']);
	$customer->set_telephone($_POST['telefono']);

	$customer->save_customer();

	if ($customer) {
		echo "Se ha insertado correctamente";
	}

	
}




?><!DOCTYPE html>
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
<center>
<body>

<h1>Ingresar Datos</h1><br>
<form class="form-inline" name="frm" action="index.php" method="post">

  <div class="form-group" >

			<input type="text" class="form-control" name="documento" placeholder="Documento">
			<br><br>	
			<input type="text" class="form-control" name="nombre" placeholder="Nombre">
			<br><br>
			<input type="text" class="form-control" name="apellido" placeholder="Apellido">
			<br><br>
			<input type="text" class="form-control" name="telefono" placeholder="Telefono">
			<br><br>
			<center><button class="btn btn-primary" type="submit" >Ingresar Datos</button></center>		

			
</form>

		<table class="table table-bordered">
		  <tr>
		  
		  <th>Identificacion</th>
		  <th>Nombre</th>
		  <th>Apellido</th>
		  <th>Telefono 	</th>
		  <th>Modificar Registro</th>
		  <th>Eliminar Registro</th>
		  </tr>

		  <?php
		  $consulta = "SELECT * FROM customers";

		  $ejecutar = mysqli_query($consulta);

		  $i = 0;

		  while ($fila = mysql_fetch_array($ejecutar)) {
		  		$document = $fila.['document'];
		  		$name = $fila.['name'];
		  		$last_name = $fila.['last_name'];
		  		$telephone = $fila.['telephone'];

		  		$i++;
		  	
		  //}

		  ?>

		  <tr align="center">
		  <td><?php echo $document;?></td>
		  <td><?php echo $name;?></td>
		  <td><?php echo $last_name;?></td>
		  <td><?php echo $telephone;?></td>
		  <td><a href="index.php?editar=<?php echo $document;?>">Modificar Registro</td>
		  <td><a href="index.php?eliminar=<?php echo $document;?>">Eliminar Registro</td>



		  </tr>

		  <?php } ?>

	  </table>

 <center>
</body>

</html>