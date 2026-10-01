<?php 
/**
 * Utilizando AJAX para obtener los datos para el DataTable
 * 
 * @link https://datatables.net/manual/ajax
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
	<title>DataTable AJAX</title>
</head>
<body>
	<h3>DataTable AJAX</h3>
	<p>

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
			]
		});
	</script>
</body>
</html>