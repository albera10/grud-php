<?php
	/* Se declaran las variable */
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'personal';

	$mysqli = new mysqli($servername, $username, $password, $dbname);

	/* Se verifica la conexión */
	if($mysqli->connect_error) {
		die('Error en la conexión: '. $conn->connect_error);
	}
	
	//echo('Conectado exitosamente');
	/*
	printf('Servidor información'. $conn->server_info);
	*/	
?>
