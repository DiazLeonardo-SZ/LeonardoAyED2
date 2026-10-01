<?php 
/**
 * También podemos configurar el dataTable con algunos parametros
 * para poder habilitar/deshabilitar opciones del dataTable
 * 
 * @link https://datatables.net/manual/options 
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="./_files/jquery.min.js"></script>
	<link rel="stylesheet" href="./_files/dataTables.css">
	<script src="./_files/dataTables.js"></script>
	<title>DataTable Options</title>
</head>
<body>
	<h3>DataTable Options</h3>
	<p>
		Desde el codigo podemos habilitar o deshabiitar opciones del tipo booleanas, tambien hay arrays de configuración
	</p>
	<table id="myTable">
		<thead>
			<th>Nombre</th>
			<th>Apellído</th>
			<th>Teléfono</th>
			<th>Email</th>
			<th>País</th>
		</thead>
		<tbody>
			
		</tbody>
	</table>
	<script>
		$('#myTable').DataTable({
			ajax: {
				url: 'script-json.php',
				dataSrc: ''
			},
			columns: [
				{ data: "nombre" },
				{ data: "apellido" },
				{ data: "telefono" },
				{ data: "email" },
				{ data: "pais" }
			],
			paging: true,
			lengthChange: false,
			searching: false,
			ordering: true,
			order: [[0, 'asc'], [1, 'asc']],
			info: false,
			autoWidth: false,
			responsive: true
		});
	</script>
</body>
</html>