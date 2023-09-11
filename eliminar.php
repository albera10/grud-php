<?php
	/* Se envoca la conexion */
	require('conexion.php');

	/* Se reciben las variables */
	$id = $_GET['id'];
	
    $sql = "DELETE FROM personas WHERE id = '$id'";
    $resultado = $mysqli->query($sql);

	header("location:index.php");
?>
