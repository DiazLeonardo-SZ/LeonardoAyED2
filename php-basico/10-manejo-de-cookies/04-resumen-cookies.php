<?php
/*
Resumen de manejo de cookies en PHP
*/

echo "<h3>Funciones y operaciones comunes</h3>";
echo '<pre>setcookie("nombre", "valor", tiempo_expiracion); // Crear o modificar cookie
$_COOKIE["nombre"] // Leer el valor de una cookie
setcookie("nombre", "", time()-1); // Borrar cookie (fecha vencida)
</pre>';

echo "<h3>Ejemplo de creación y lectura</h3>";
echo '<pre>// Crear cookie por 1 día
setcookie("usuario", "andres", time() + 60*60*24);

// Leer cookie
echo $_COOKIE["usuario"];
</pre>';

echo "<h3>Buenas prácticas</h3>";
echo '<pre>- No guardes datos sensibles en cookies
- Las cookies pueden ser modificadas por el usuario
- El borrado de cookies puede no ser inmediato
- Usa htmlspecialchars() al mostrar datos de cookies
</pre>'; 