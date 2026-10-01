<?php 
/**
 * Estilos para los DataTable, hay varias opciones, vamos a ver
 * ejemplos con BootStrap 4, tambien se debe agregar una nueva 
 * libreria para que funcione.
 * 
 * @link https://datatables.net/manual/styling/
 */
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
	<title>DataTable Styles</title>
</head>
<body>
	<div class="container">
	<h3>DataTable Styles</h3>
	<p>
		Aplicando estilos de BootStrap 4, descargamos de la página de DataTables las librerias para BS4 y tambien para los botones
	</p>
	<table id="myTable" class="table table-striped table-bordered">
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
	</div>
	<script>
		$('#myTable').DataTable({
			layout: {
				topStart: {
					buttons: {
						buttons: ['colvis','copy','csv','excel','pdf','print']
					}
				},
				topEnd: null,
				top2Start: 'pageLength',
				top2End: 'search',
				bottomStart: 'info',
				bottomEnd: 'paging'
			},
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
			lengthChange: true,
			searching: true,
			ordering: true,
			order: [[0, 'asc'], [1, 'asc']],
			info: true,
			autoWidth: false,
			responsive: true
		});
		$("#myTable > button").addClass("btn-info")
	</script>
	<script src="./_files/bs4-dataTables.min.js"></script>
	<script src="./_files/popper.min.js"></script>
	<script src="./_files/bootstrap.bundle.min.js"></script>
</body>
</html>