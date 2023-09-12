<?php
	require_once('conexion.php');	
    
	/* Se declara una variable */
	$where = "";
/*
	if(!empty($_POST)){
		
		$valor = $_POST['campo'];

		if(!empty($valor)){
			$where = "WHERE nombre = '$nombre";
		}
	}	*/

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
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
	<meta charset="UTF-8">
	<title>CRUD</title>
</head>

<body>
	<div class="container">

		<div class="row">

			<div class="col-md-8 mt-4">
				<div class="col-4">
					<a href="nuevo.php" class="btn btn-primary">+ Nuevo usuarios</a>
				</div>

			</div>			

			<!-- Se crea una tabla responsiva -->			
			<div class=" mt-3">
				<div class="card border-primary mb-3" style="max-width: 100%;">
					<div class="card-header">
						<h4>Tabla usuarios</h4>
					</div>
					<div class="card-body">
						<table id="myTable" class="display" style="width:100%">
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
										<a class="btn btn-success" href="editar.php?id=<?php echo($row['id']); ?>">
											<i class="bi bi-pencil"></i>
										</a>
										
										<a class="btn btn-info" href="ver.php"><i class="bi bi-eye"></i></a>										

										<a class="btn btn-danger" href="#"
											data-href="eliminar.php?id=<?php echo($row['id']); ?>"
											data-bs-toggle="modal" data-bs-target="#confirm-delete">
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
		</div>
	</div> <!-- End container -->

	<!-- Modal -->
	<div class=" modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
							aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Borrar Registro</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<div class="modal-body">
										¿Deseas boorar este registro?
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary"
											data-bs-dismiss="modal">Cancelar</button>
										<a href="eliminar.php" class="btn btn-primary btn-ok">Borrar</a>										
										<!-- <button type="button" class="btn btn-primary btn-ok">Borrar</button> -->
									</div>
								</div>
							</div>
					</div>

					<script src="jquery/jquery-3.7.1.min.js"></script>
					<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
					<script src="bootstrap/js/bootstrap.min.js"></script>					
					<script src="js/scripts.js"></script>
</body>

</html>