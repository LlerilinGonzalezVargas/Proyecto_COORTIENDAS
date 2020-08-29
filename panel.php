<?php
session_start();
error_reporting(0);

$varsesion = $_SESSION['nombre'];


if ($varsesion == null || $varsesion = '') {
	echo 'usted no tiene autorización';
	die();
}
?>

<!DOCTYPE >

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Panel de administración</h1>
	<h2>Bienvenido: <?php echo $_SESSION['nombre'] ?> </h2>
<a href="cerrar_session.php">cerrar sesión</a>

</body>
</html>