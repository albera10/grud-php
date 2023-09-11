<?php
	/* Se envoca la conexion */
	require('conexion.php');

	/* Se reciben las variables */
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$correo	= $_POST['correo'];
	$telefono = $_POST['telefono'];
	$estado_civil = $_POST['estado_civil'];
    
    $sql = "UPDATE personas SET nombre = '$nombre', correo = '$correo', telefono = '$telefono', estado_civil = '$estado_civil' WHERE id = '$id'";
    $resultado = $mysqli->query($sql);

	header("location:index.php");
?>















