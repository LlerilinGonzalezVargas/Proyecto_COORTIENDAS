<?php
session_start();
error_reporting(0);

$varsesion = $_SESSION['nombre'];


if ($varsesion == null || $varsesion ='') {
	echo 'usted no tiene autorización';
	die();
}
session_destroy();
header("Location:index.php")
?>