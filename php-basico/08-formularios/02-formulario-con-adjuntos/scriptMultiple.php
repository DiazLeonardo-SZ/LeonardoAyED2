<?php 
/**
 * Procesamiento de formulario con múltiples adjuntos en PHP
 * Siempre valida el tipo y tamaño de cada archivo en el backend.
 * ¡Nunca confíes solo en la validación del frontend!
 * @link https://www.php.net/manual/en/features.file-upload.errors.php
 */

// Mostrar información de los archivos recibidos
echo "<b>Datos de los archivos recibidos:</b><br>";
print_r($_FILES);
echo "<br>";

$uploaddir = "/var/www/html/php-basico/_files/";

for ($i=0; $i < count($_FILES['userfile']['name']) ; $i++) { 
	$uploadfile = $uploaddir.$_FILES['userfile']['name'][$i];
	// Validar archivo: error, tamaño y tipo
	if ($_FILES['userfile']['error'][$i] === 0) {
		if (intval($_FILES['userfile']['size'][$i]) <= 2000000) {
			if ($_FILES['userfile']['type'][$i] === "application/pdf") {
				// Si el archivo cumple se sube
				// move_uploaded_file($_FILES['userfile']['tmp_name'][$i], $uploadfile);
				echo "El archivo ".$_FILES['userfile']['name'][$i]." se subió correctamente.<br>";
			} else {
				echo "El archivo, ".$_FILES['userfile']['name'][$i]." no cumple con el formato.<br>";
			}
		} else {
			echo "El archivo, ".$_FILES['userfile']['name'][$i]." excede el tamaño máximo permitido.<br>";
		}
	} else {
		echo "El archivo, ".$_FILES['userfile']['name'][$i]." no cumple con los requisitos.<br>";
	}
}

// Mensaje de advertencia
echo "<hr><b>Advertencia:</b> Siempre valida el tipo y tamaño de cada archivo en el backend.<br>";
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
