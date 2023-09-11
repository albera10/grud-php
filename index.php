<?php
	require_once('conexion.php');	
    
	/* Se declara una variable */
	$where = "";

	/* Query para visualizar los registros */
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
			
			<div class="col-md-8">
				<a href="nuevo.php" class="btn btn-primary mt-4 col-sm-2.5">+ Nuevo usuarios</a>
			</div>

			<form action="" method="POST" class="col-sm-4 offset-sm-2 col-md-4 offset-md-0 mt-4">
				<b>Nombre: </b><input type="text" id="campo" name="campo">
				<input class="btn btn-primary" type="submit" id="enviar" name="enviar" value="Buscar">
			</form>
		</div> <!-- Row -->
			



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
									<a class="btn btn-warning" href="editar.php?id=<?php echo($row['id']); ?>">
										<i class="bi bi-pencil"></i>
									</a>
									<a class="btn btn-primary" href="#" data-href="eliminar.php?id=<?php echo($row['id']); ?>" data-bs-toggle="modal" data-bs-target="#confirm-delete">
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
  <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Borrar Registro</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			¿Deseas boorar este registro?
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
		  <a href="eliminar.php" class="btn btn-primary btn-ok">Borrar</a>
		  <!-- <button type="button" class="btn btn-primary btn-ok">Borrar</button> -->
		</div>
	  </div>
	</div>
  </div>

	<script src="jquery/jquery-3.7.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
	<script src="js/scripts.js"></script>
</body>

</html>

