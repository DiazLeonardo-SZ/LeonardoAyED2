<?php 
/**
 * En este ejemplo solo utilizaremos la configuración de DataTable, y
 * los datos los mostraremos con PHP
 */
$json_arr = json_decode(file_get_contents('./_files/datos.json'),JSON_OBJECT_AS_ARRAY);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" href="./_files/bs4-buttons-dataTables.min.css">
	<link rel="stylesheet" href="./_files/bs4-dataTables.min.css">
	<link rel="stylesheet" href="./_files/bootstrap.min.css">
	<script src="./_files/jquery.min.js"></script>
	<script src="./_files/bs4-dataTables.min.js"></script>
	<script src="./_files/bs4-buttons-dataTables.min.js"></script>
	<script src="./_files/pdfmake.min.js"></script>
	<script src="./_files/vfs_fonts.js"></script>
	<title>DataTable</title>
</head>
<body>
	<div class="container">
	<h3>DataTable</h3>
	<p>
		Tambien se puede utilizar solo la instancia de DataTable y mostrar los datos desde PHP con un foreach en el tbody
	</p>	
	<table id="myTable" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellído</th>
				<th>Teléfono</th>
				<th>Email</th>
				<th>Dirección</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($json_arr as $key => $value): ?>
				<tr>
					<td><?php echo $value['nombre'] ?> </td>
					<td><?php echo $value['apellido'] ?> </td>
					<td><?php echo $value['telefono'] ?> </td>
					<td><?php echo $value['email'] ?> </td>
					<td><?php echo $value['pais'] ?> </td>
					<td>
						<a href="#" class="btn btn-warning">EDIT</a>
						<a href="#" class="btn btn-danger">DELETE</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>	
	</table>
	</div>
	<script>		
		$("#myTable").DataTable({
			paging: true,
			lengthChange: true,
			searching: true,
			ordering: true,
			order: [[0, 'asc'], [1, 'asc']],
			info: false,
			autoWidth: false,
			responsive: true
		});		
	</script>
	<script src="./_files/bs4-dataTables.min.js"></script>
	<script src="./_files/popper.min.js"></script>
	<script src="./_files/bootstrap.bundle.min.js"></script>
</body>
</html>