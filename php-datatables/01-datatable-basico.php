<?php 
/**
 * DataTables es una libreria de JavaScript que puede personalizarse
 * y es una de las más usadas en proyectos WEB. Para que funcione
 * hay que incluir tambien la linreria JQuery. Como recomendación es
 * preferible siempre trabajar con datos en formato JSON, aunque
 * tambien acepta Arrays.
 * 
 * @link https://datatables.net/manual/index
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
	<title>DataTable Basico</title>
</head>
<body>
	<h3>DataTable Basico</h3>
	<p>
		Para hacer una prueba vamos a leer datos desde un Array[] y los mostraremos en nuestro dataTable.
	</p>
	<table id="myTable1">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellído</th>
				<th>Email</th>
				<th>Teléfono</th>
				<th>Dirección</th>
			</tr>
		</thead>
		<tbody>

		</tbody>	
	</table>
	<hr>
	<p>
		DataTable con datos desde un Objeto()
	</p>
	<table id="myTable2">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellído</th>
				<th>Email</th>
				<th>Teléfono</th>
				<th>Dirección</th>
			</tr>
		</thead>
		<tbody>

		</tbody>	
	</table>
	<script>
		let personas = [
			[
				"Dante",
				"Norman",
				"luctus@protonmail.com",
				"(713) 261-9872",
				"Ap #629-5897 Nec Avenue"
				],
			[
				"Shoshana",
				"Hunter",
				"convallis.dolor.quisque@outlook.net",
				"1-547-572-5535",
				"Ap #990-2313 Sem, Road"
				],
			[
				"Yoshio",
				"Beard",
				"malesuada@hotmail.org",
				"(761) 957-5623",
				"101-7409 Eu Road"
				]
			];
		let usuarios = [
			{
				"nombre": "Juan",
				"apellidos": "Gonzalez",
				"edad": 25,			 
				"municipio": "Merlo",
				"localidad": "Libertad",
				"calle": "Zapiola 333"			
			},
			{
				"nombre": "Felipe",
				"apellidos": "Sanchez",
				"edad": 27,
				"municipio": "Merlo",
				"localidad": "San Antonio de Padua",
				"calle": "Directorio 543"
			}
		];
		$("#myTable1").DataTable({
			data: personas
		});
		$("#myTable2").DataTable({
			data: usuarios,
			columns: [
				{ data: "nombre" },
				{ data: "apellidos" },
				{ data: "edad" },
				{ data: "municipio" },
				{ data: "localidad" },
				{ data: "calle" }
			]
		});
	</script>
</body>
</html>