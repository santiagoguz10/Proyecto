<!DOCTYPE html> 
<meta charset="UTF-8">
<?php  
$con = mysqli_connect("localhost","root","","test_php") or die("conexion exitosa!");
?>
<html> 	
		<head>
							<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

				<!-- Optional theme -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

				<!-- Latest compiled and minified JavaScript -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


			<meta chrset="UTF-8">
			<title>CRUD PHP & MySQL</title> 
		</head>
<body>
<center>
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

	<br><br>
	
	<?php 
	if(isset($_POST['insert'])){
	
		$document = $_POST['document'];
		$name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$telephone = $_POST['telephone'];
		
		$insertar = "INSERT INTO customers(document,name,lastname,telephone) values ('$document','$name','$lastname','$telephone')";
		
		$ejecutar = mysqli_query($con,$insertar);
	
		if($ejecutar){
		
		echo "<h3>Insertado correctamente</h3>";
		}
	}
	
	?> 
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
		
		<?php 
			
			
			$consulta = "SELECT * FROM customers";
			
			$ejecutar = mysqli_query($con, $consulta); 
			
			$i = 0;
			
			while($fila=mysqli_fetch_array($ejecutar)){			
				$document = $fila['document'];
				$name = $fila['name']; 
				$lastname = $fila['lastname']; 
				$telephone = $fila['telephone'];
				
				$i++;	
			
		?>
		<tr align="center">
			<td><?php echo $document; ?></td>
			<td><?php echo $name; ?></td>
			<td><?php echo $lastname; ?></td>
			<td><?php echo $telephone; ?></td>
			<td><a href="index.php?editar=<?php echo $document; ?>" class="btn btn-primary">Modificar</a></td>
			<td><a href="index.php?borrar=<?php echo $document; ?>" class="btn btn-danger">Eliminar</a></td>
		</tr>
		<?php } ?>
		
	
	</table>
	<?php
		if(isset($_GET['editar'])){
		include("editar.php");
		}
	?> 
	<?php 
	if(isset($_GET['borrar'])){
	
	$borrar_doc = $_GET['borrar'];
	
	$borrar = "DELETE FROM customers WHERE document='$borrar_doc'";
	
	$ejecutar = mysqli_query($con,$borrar); 
		
		if($ejecutar){
		
		echo "<script>alert('El usuario ha sido borrado!')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		}
	
	}
	
	?>
	</center>



</script>

</body>
</html>



