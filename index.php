<?php
	require_once('conexion.php');	
    
	/* Se declara una variable */
	$where = "";

	$sql = "SELECT * FROM personas";
	$resultado = $mysqli->query($sql);	
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css">
	<meta charset="UTF-8">
	<title>CRUD</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<h2 class="text-align:center mt-4">Relación de personal</h2>
		</div> <!-- Row -->

		<div>
			<a href="nuevo.php" class="btn btn-primary mt-4">+ Nuevo usuarios</a>
		</div>

		<!-- Se crea una tabla responsiva -->
		<div class="mt-3">
			<div class="card border-primary mb-3" style="max-width: 200rem;">
				<div class="card-header"><h4>Tabla usuarios</h4></div>
				<div class="card-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nombre</th>
								<th>Correo</th>
								<th>Teléfono</th>
								<th>Estado Civil</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							<?php while($row = $resultado->fetch_array()) { ?>								
							<tr>								
								<td><?php echo($row['id']); ?></td>
								<td><?php echo($row['nombre']); ?></td>
								<td><?php echo($row['correo']); ?></td>
								<td><?php echo($row['telefono']); ?></td>
								<td><?php echo($row['estado_civil']); ?></td>
								<td>
									<a class="btn btn-primary" href="editar.php?id=<?php echo($row['id']); ?>">
										<i class="bi bi-pencil"></i>
									</a>
									<a class="btn btn-warning" href="#" data-href="eliminar.php?id=<?php echo($row['id']); ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<i class="bi bi-trash3"></i>
									</a>
								</td>								
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div> <!-- End container -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			¿Deseas eliminar este registro?
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
		  <button type="button" class="btn btn-primary">Borrar</button>
		</div>
	  </div>
	</div>
  </div>



<!-- <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" &times;></button>
					<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
				</div>

				<div class="modal-body">
					¿Deseas eliminar este registro?
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<a class="btn btn-danger btn-ok">Borrar</a>
				</div>

			</div>
		</div>
	</div>
 -->















	<script src="jquery/jquery-3.7.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
	<script src="js/scripts.js"></script>
</body>

</html>