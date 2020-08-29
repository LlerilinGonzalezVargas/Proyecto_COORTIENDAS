<?php 


session_start();



$usuario = $_POST['nombre'];
$clave = $_POST['passw'];
$_SESSION['nombre'] = $usuario;

 $conexion= mysqli_connect("localhost","root","","crud");

$consulta= " SELECT * FROM user WHERE usuario='$usuario' and password='$clave'";


$resultado=mysqli_query($conexion,$consulta);


$filas=mysqli_num_rows($resultado);




 if($filas>0 and $clave = $_POST['passw'] === $clave = $_POST['passw']){
header("Location:panel.php");
header ("location:index_2.php");

}else{


    echo '<script>alert("CUENTA NO EXISTENTE/DATOS INCORRECTOS/")</script> ';
    
    echo "<script>location.href='index.php'</script>"; 

}


mysqli_free_result($resultado);
mysqli_close ($conexion);







?>


