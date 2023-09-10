<!DOCTYPE html>
<html lang="es">
<head>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
	<meta charset="UTF-8">
	<title>Nuevo Usuario</title>
</head>
<body>
	<div class="container mt-5">
		<div class="card border-primary mb-3" style="max-width: 200rem;">
			<div class="card-header">
				<h4>Nuevo registro</h4>
			</div>
			<div class="card-body">
				<form class="row g-3"  method="POST" action="guardar.php">

					<div class="col-md-6">
						<label for="inputEmail4" class="form-label">Nombre</label>
						<input type="text" class="form-control" id="inputEmail4" name="nombre">
					</div>

					<div class="col-md-6">
						<label for="inputPassword4" class="form-label">Email</label>
						<input type="email" class="form-control" id="inputPassword4" name="correo">
					</div>

					<div class="col-6">
						<label for="inputAddress" class="form-label">Teléfono</label>
						<input type="number" class="form-control" id="inputAddress" placeholder="00 0000 0000" name="telefono">
					</div>

					<div class="col-md-6">
						<label for="inputState" class="form-label">Estado civil</label>
						<select id="inputState" class="form-select"  id="estado_civil" name="estado_civil">
							<option selected>Abrir este menú de selección</option>
							<option value="Soltero">Soltero</option>
							<option value="Casado">Casado</option>
							<option value="Otros">Otro</option>
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