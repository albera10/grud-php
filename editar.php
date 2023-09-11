<?php
    /* Se carga la conexión */
    require_once('conexion.php');

    $id = $_GET['id'];
    $sql = "SELECT * FROM personas WHERE id = '$id'";
    $resultado = $mysqli->query($sql);

    $row = $resultado->fetch_array();

?>

<!DOCTYPE html>
<html lang="es">
<head>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
	<meta charset="UTF-8">
	<title>Editar Usuario</title>
</head>
<body>
	<div class="container mt-5">
		<div class="card border-primary mb-3" style="max-width: 200rem;">
			<div class="card-header">
				<h4>Editar registro</h4>
			</div>
			<div class="card-body">                
				<form class="row g-3"  method="POST" action="update.php">

                <input type="hidden" id="id" name="id" value="<?php echo($row['id']); ?>">

					<div class="col-md-6">
						<label for="inputEmail4" class="form-label">Nombre</label>
						<input type="text" class="form-control" id="inputEmail4" name="nombre" value="<?php echo($row['nombre']); ?>">
					</div>

					<div class="col-md-6">
						<label for="inputPassword4" class="form-label">Email</label>
						<input type="email" class="form-control" id="inputPassword4" name="correo" value="<?php echo($row['correo']); ?>">
					</div>

					<div class="col-6">
						<label for="inputAddress" class="form-label">Teléfono</label>
						<input type="number" class="form-control" id="inputAddress" placeholder="00 0000 0000" name="telefono" value="<?php echo($row['telefono']); ?>">
					</div>

					<div class="col-md-6">
						
                    <label for="inputState" class="form-label">Estado civil</label>

						<select class="form-control" id="estado_civil" name="estado_civil"> <!-- id="inputState" class="form-select" -->

                            <!-- <option selected>Abrir este menú de selección</option> -->

							<option value="Soltero" <?php if($row['estado_civil'] == 'Soltero') echo('selectd'); ?>>Soltero</option>
							
                            <option value="Casado" <?php if($row['estado_civil'] == 'Casado') echo('selectd'); ?>>Casado</option>
							
                            <option value="Otro" <?php if($row['estado_civil'] == 'Otros') echo('selectd'); ?>>Otro</option>
						</select>
					</div>
					
					<div class="col-12">
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<a href="index.php" class="btn btn-warning">Regresar</a>
								<button type="submit" class="btn btn-primary">Guardar</button>
							</div>
						</div>
					</div>
										
				</form>
			</div>
		</div>		
	</div>

</body>
</html>