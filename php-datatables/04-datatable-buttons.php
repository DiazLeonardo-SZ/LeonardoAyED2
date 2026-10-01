<?php 
/**
 * Configurar algunos botones para un dataTable más complejo, al ser
 * una extension se deben descargar e incluir para que funcionen, aquí
 * en los ejemplos incluiremos algunos de los más usados
 * 
 * @link https://datatables.net/extensions/buttons/
 * 
 * Configurar el objeto layout para ubicar lo botones
 * 
 * @link https://datatables.net/reference/option/layout
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./_files/buttons-dataTables.min.css">
	<link rel="stylesheet" href="./_files/dataTables.css">
	<script src="./_files/jquery.min.js"></script>
	<script src="./_files/dataTables.js"></script>
	<script src="./_files/buttons-dataTables.min.js"></script>
	<script src="./_files/pdfmake.min.js"></script>
	<script src="./_files/vfs_fonts.js"></script>
	<title>DataTable Buttons</title>
</head>
<body>
	<h3>DataTable Buttons</h3>
	<p>
		Botones con diferentes acciones para el DataTable 
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
			layout: {
				topStart: {
					buttons: {
						buttons: ['colvis','copy','csv','excel','pdf','print'],
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
	</script>
</body>
</html>