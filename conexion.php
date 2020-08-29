<?php
 $host = "";
 $user = "root";
 $clave = "";
 $bd = "crud";
 $conexion = mysqli_connect($host,$user,$clave,$bd);



if (!$conexion) {
	echo 'error al conectar la base de datos';
}
else{
 
echo 'Conectado';





}

 ?>