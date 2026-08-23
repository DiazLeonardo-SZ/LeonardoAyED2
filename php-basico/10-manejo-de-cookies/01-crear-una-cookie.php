<?php 
/**
 * ¿Qué son las Cookies? Básicamente es guardar información del 
 * usuario en el navegador cliente. Puede tener varios usos, como
 * identificar al usuario antes del login o hacer estadísticas de los sitios visitados.
 * ¡Advertencia! No guardes datos sensibles o contraseñas en cookies.
 * Las cookies pueden ser manipuladas por el usuario.
 * 
 * @link https://www.xataka.com/basics/que-cookies-que-tipos-hay-que-pasa-desactivas
 * 
 * Para crear una cookie, se debe declarar antes de enviar cualquier salida al navegador.
 * Es recomendable separar los datos con |
 * Las cookies se pueden visualizar en el navegador (F12 → Aplicación → Cookies).
 */

$nombre = "datos";
$valor = "andres@mail.com|Andres|Romano";
$fecha = time() + (60*60*24); // Expira en 1 día
setcookie($nombre, $valor, $fecha);

// Verificar si la cookie se ha enviado (solo estará disponible en la próxima petición)
if (isset($_COOKIE[$nombre])) {
    $cookie = $_COOKIE[$nombre];
    echo "Cookie ya disponible: $cookie<br>";
} else {
    echo "La cookie se enviará al navegador y estará disponible en la próxima carga.<br>";
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Cookies | Crear</title>
 <meta charset="utf-8">
</head>
 <body>
 	<h3>Cookies!</h3>
 	<!--
 	Advertencia: No guardes datos sensibles en cookies. El usuario puede ver y modificar su contenido.
 	-->
 </body>
</html>