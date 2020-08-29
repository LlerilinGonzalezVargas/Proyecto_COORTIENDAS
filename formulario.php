<!DOCTYPE html> 
<meta charset="UTF-8">
<?php  
$con = mysqli_connect("localhost","root","","crud") or die("conexion exitosa!");
?>
<html> 	
		<head>
			<meta chrset="UTF-8">
			<title>CRUD PHP & MySQL</title> 
		</head>
<body>
	
	<form method="post" action="formulario.php">
		<label>Nombre:</label>
		<input type="text" name="nombre" placeholder="Escriba su nombre"/ required><br/>
		<label>Contraseña:</label>
		<input type="password" name="passw" placeholder="Escriba se contraseña"/ required><br/>
		<label>Email:</label>
		<input type="email" name="email" placeholder="Escriba su email"/ required><br/>

<select name="tarjeta" id="tarjeta" required>
  <option value="Cedula de ciudadania">Cedula de ciudadania</option>​
  <option value="Cedula de Extranjeria">Cedula de Extranjeria</option>​
  <option value="Tarjeta de identidad">Tarjeta de identidad</option>
</select>
		<label>Numero de identificacion</label>
		<input type="text" name="num" placeholder="Escriba su numero de identificacion"><br/>

		<input type="submit" name="insert" value="INSERTAR DATOS"/>

	
	</form>

	
	<?php 
	if(isset($_POST['insert'])){


	
		$usuario = $_POST['nombre'];
		$pass = $_POST['passw'];
		$email = $_POST['email'];
		$tarjeta = $_POST['tarjeta'];
		$num = $_POST['num'];
		
		$insertar = "INSERT INTO user
		 (usuario,password,email,tarjeta,num) values ('$usuario','$pass','$email','$tarjeta','$num')";
		
		$ejecutar = mysqli_query($con,$insertar);

	
		if($ejecutar){
		
		echo "<h3>Insertado correctamente</h3>";
		}
	}
	
	?> 
	<br/>
	<table width="500" border="2" style="background-color: #F9F9F9;">
	
		<tr>
			<th>ID</th>
			<th>Usuario</th>
			<th>Password</th>
			<th>Email</th>

            <th>Tipo de identificacion</th>
			<th>Numero de identificacion</th>
		    <th>Editar</th>
			<th>Borrar</th>
		</tr>
		
		<?php 
			
			
			$consulta = "SELECT * FROM user";
			
			$ejecutar = mysqli_query($con, $consulta); 
			
			$i = 0;
			
			while($fila=mysqli_fetch_array($ejecutar)){			
				$id = $fila['id'];
				$usuario = $fila['usuario']; 
				$password = $fila['password']; 
				$email = $fila['email'];
				$tarjeta = $fila['tarjeta'];
				$num = $fila['num'];

				$i++;	
			
		?>
		<tr align="center">
			<td><?php echo $id; ?></td>
			<td><?php echo $usuario; ?></td>
			<td><?php echo $password; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $tarjeta; ?></td>
			<td><?php echo $num; ?></td>
			<td><a href="formulario.php?editar=<?php echo $id; ?>">Editar</a></td>
			<td><a href="formulario.php?borrar=<?php echo $id; ?>">Borrar</a></td>
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
	
	$borrar_id = $_GET['borrar'];
	
	$borrar = "DELETE FROM user WHERE id='$borrar_id'";
	
	$ejecutar = mysqli_query($con,$borrar); 
		
		if($ejecutar){
		
		echo "<script>alert('El usuario ha sido borrado!')</script>";
		echo "<script>window.open('formulario.php','_self')</script>";
		}
	
	}
	
	?>
	

</body>
</html>



