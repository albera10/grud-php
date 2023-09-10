<?php
	/* Se envoca la conexion */
	require('conexion.php');

	/* Se reciben las variables */
	$nombre = $_POST['nombre'];
	$correo	= $_POST['correo'];
	$telefono = $_POST['telefono'];
	$estado_civil = $_POST['estado_civil'];


	$sql = "INSERT INTO personas(nombre, correo, telefono, estado_civil) VALUES('$nombre', '$correo', '$telefono', '$estado_civil')";
	$resultado = $mysqli->query($sql);
?>

	<html lang="es">
	<head>		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>					
					<a href="index.php" class="btn btn-primary">Regresar</a>					
				</div>
			</div>
		</div>
	</body>
</html>
