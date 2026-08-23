<?php 
/**
 * Las funciones de base64 sirven para codificar, o decodificar, un string
 * pero no son un metedo de encryptacion, su uso generalmente es para 
 * transportar informacion dentro de la aplicación
 * 
 * @link https://www.php.net/manual/en/function.base64-encode
 * 
 */

# un ejemplo puede ser codificar un id que se expone en la url

$usuario_id = 1;
?>
<a href="http://localhost:8050/php-basico/17-algunos-aspectos-seguridad/02-funciones-base64.php?usuario=<?php echo base64_encode($usuario_id) ?>">usuario</a><br>

<p>y luego podemos decodificarlo</p>

<?php
// Validar que el parámetro existe y es numérico tras decodificar
$id_decodificado = null;
if (isset($_GET['usuario'])) {
    $id_decodificado = base64_decode($_GET['usuario'], true);
    if ($id_decodificado !== false && ctype_digit($id_decodificado)) {
        echo "usuario id es: ".$id_decodificado."<br>";
    } else {
        echo "<b>Valor inválido o manipulado.</b><br>";
    }
}
?>
<a href="http://localhost:8050/php-basico/17-algunos-aspectos-seguridad/02-funciones-base64.php">volver</a>

<p>otro ejemplo puede ser en formularios</p>

<form action="" method="post">
	<input type="text" name="user" value="andres" readonly>
	<input type="hidden" name="id" value="<?php echo base64_encode($usuario_id) ?>">
	<input type="submit" name="submit" value="enviar">
</form>
<?php 
if (isset($_POST['submit'])) {
    $user = $_POST['user'] ?? '';
    $id = base64_decode($_POST['id'] ?? '', true);
    if ($id !== false && ctype_digit($id)) {
        echo "se actualizaron los datos del usuario: $user con id: $id<br>";
    } else {
        echo "<b>Valor de id inválido o manipulado.</b><br>";
    }
}
// ¡Advertencia! Nunca expongas datos sensibles en URLs o formularios usando solo base64.
