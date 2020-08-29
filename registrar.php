
<?php

include 'conexion.php';
$usuario = $_POST['nombre'];

$clave = $_POST['passw'];
$clave1= $_POST['password'];
$correo = $_POST['email'];

$tarjeta = $_POST['tarjeta'];
$numero = $_POST['num'];


if (strlen($usuario )> 30) {
	
echo '<script>alert("Él nombre tiene más de 30 letras")</script> ';
echo "<script>location.href='Registro.php'</script>";

}

else {
	


if($clave != $clave1){
	
	 echo '<script>alert("Las claves no coinciden")</script> ';
 echo "<script>location.href='Registro.php'</script>"; 


}
else  {
		
	if (is_nan($numero)) {
		echo '<script>alert("la tarjeta contiene letras")</script> ';
 echo "<script>location.href='Registro.php'</script>"; 

	}

else{

$verificar_usuario =mysqli_query($conexion, "SELECT * FROM user WHERE usuario ='$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0) {

 echo '<script>alert("Usuario ya registrado, ")</script> ';
 echo "<script>location.href='Registro.php'</script>"; 
exit;

}
$verificar_correo =mysqli_query($conexion, "SELECT * FROM user WHERE email ='$correo' ");
if(mysqli_num_rows($verificar_correo) > 0) {

 echo '<script>alert("El correo ha sido utilizado")</script> ';
 echo "<script>location.href='Registro.php'</script>"; 
 
exit;
}
$verificar_num =mysqli_query($conexion, "SELECT * FROM user WHERE num ='$numero' ");
if(mysqli_num_rows($verificar_num) > 0) {

 echo '<script>alert("Tarjeta de identidad existente")</script> ';
 echo "<script>location.href='Registro.php'</script>"; 
exit;
}
$insertar ="INSERT INTO user(usuario,password,email,tarjeta,num) VALUES('$usuario','$clave', '$correo','$tarjeta','$numero')";

$resultado =mysqli_query($conexion, $insertar);


if (!$resultado){



    echo '<script>alert("Error al registrarse")</script> ';
    
    
}
else{

echo '<script>alert("Usuario registrado correctamente")</script> ';
    
    echo "<script>location.href='index.php'</script>"; 


}
}
}
}
mysqli_close($conexion);
?>