<?php 
/**
 * Ejemplo de conexión a MySQL usando PDO (PHP Data Objects)
 * PDO es la forma recomendada de conectarse a bases de datos en PHP por su flexibilidad y seguridad.
 *
 * ¡Advertencia! Nunca expongas tus credenciales en el código fuente. Usa variables de entorno o archivos de configuración fuera del directorio público.
 * @link https://www.php.net/manual/es/book.pdo.php
 */

function conectar() {
	// Sintaxis: PDO("mysql:host=servidor;dbname=base_de_datos", "usuario", "contraseña");
	// Usamos variables de entorno para mayor seguridad
	try {
		$link = new PDO(
			"mysql:host=".$_ENV["SQL_SERVER"].";dbname=mysql",
			"root",
			$_ENV["MYSQL_ROOT_PASSWORD"]
		);
		$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Mejor manejo de errores
		$link->exec("set names utf8");
		return $link;
	} catch (PDOException $e) {
		// No mostrar detalles en producción
		echo "<b>Error de conexión:</b> ".htmlspecialchars($e->getMessage());
		return null;
	}
}

$conexion = conectar(); // almacenamos el objeto PDO en $conexion
if ($conexion) {
	echo '<pre>'; print_r($conexion); echo '</pre>';
	echo "<b>Conexión exitosa.</b><br>";
} else {
	echo "<b>No se pudo conectar a la base de datos.</b><br>";
}

/*
Si ves un objeto PDO vacío, la conexión fue exitosa:
PDO Object
(
)
*/