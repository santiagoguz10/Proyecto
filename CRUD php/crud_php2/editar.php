<?php 
		if(isset($_GET['editar'])){
			
			$editar_doc = $_GET['editar']; 
			
			$consulta = "SELECT * FROM customers WHERE document='$editar_doc'";
			$ejecutar = mysqli_query($con, $consulta); 
			
			$fila=mysqli_fetch_array($ejecutar);
			
			$document = $fila['document']; 
			$name = $fila['name']; 
			$lastname = $fila['lastname']; 
			$telephone = $fila['telephone'];
			
			}
?>
		
<br/>
<form method="post" action="">
		<input type="number" name="document" value="<?php echo $document;?>"/><br/>
		<input type="text" name="name" value="<?php echo $name;?>"/><br/>
		<input type="text" name="lastname" value="<?php echo $lastname;?>"/><br/>
		<input type="number" name="telephone" value="<?php echo $telephone ;?>"/><br/>
		<input type="submit" name="actualizar" value="ACTUALIZAR DATOS"/>
	
</form>
	<?php 
	if(isset($_POST['actualizar'])){
	
		 $actualizar_document = $_POST['document'];	
		$actualizar_name = $_POST['name'];
		$actualizar_lastname = $_POST['lastname'];
		$actualizar_telephone = $_POST['telephone'];
		
		
		$actualizar = "UPDATE customers SET document='$actualizar_document', name='$actualizar_name', lastname='$actualizar_lastname', telephone='$actualizar_telephone' WHERE document='$editar_doc'";
		
		$ejecutar = mysqli_query($con, $actualizar);
	
		if($ejecutar){
		
		echo "<script>alert('Datos actualizados!')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		}
	}
	
	?> 