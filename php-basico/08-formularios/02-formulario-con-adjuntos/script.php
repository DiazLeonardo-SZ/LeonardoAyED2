<?php 
/**
 * Procesamiento de formulario con adjunto en PHP
 * Siempre valida el tipo y tamaño del archivo en el backend.
 * ¡Nunca confíes solo en la validación del frontend!
 * @link https://www.php.net/manual/en/features.file-upload.errors.php
 */

// Mostrar información del archivo recibido
echo "<b>Datos del archivo recibido:</b><br>";
print_r($_FILES);
echo "<br>";

$uploaddir = "/var/www/html/php-basico/_files/";
$uploadfile = $uploaddir.$_FILES['userfile']['name'];

// Validar archivo: error, tamaño y tipo
if ( ($_FILES['userfile']['error'] === 0)
	&& (intval($_FILES['userfile']['size']) <= 2000000)
	&& ($_FILES['userfile']['type'] === "application/pdf" )
	) {
	// Si el archivo cumple se sube
	// move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
	echo "El archivo se subió correctamente.<br>";
} else {
	echo "Error al subir el archivo, no cumple con los requisitos.<br>";
}

// Mensaje de advertencia
echo "<hr><b>Advertencia:</b> Siempre valida el tipo y tamaño del archivo en el backend.<br>";
echo "No confíes solo en la validación del lado del cliente.<br>";

/*
INFO EXTRA

 Se aceptan [type] 
 application/pdf 
 image/png 
 image/jpeg 
 text/plain
 application/octet-stream(CSV) 
 application/vnd.openxmlformats-officedocument.wordprocessingml.document (WORD)
 application/vnd.openxmlformats-officedocument.spreadsheetml.sheet (EXCEL) 
 application/zip (.ZIP) 
 application/gzip (tar)

 Para validar el tamaño tener en cuenta que el dato del array $_FILES['size'] en un string, para poder compararlo con un numero tengo que utilizar la funcion intval()

*/