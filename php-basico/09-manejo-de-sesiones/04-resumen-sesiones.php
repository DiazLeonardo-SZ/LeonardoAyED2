<?php
/*
Resumen de manejo de sesiones en PHP
*/

echo "<h3>Funciones y operaciones comunes</h3>";
echo '<pre>session_start();         // Iniciar o reanudar una sesión
$_SESSION["clave"] = valor; // Asignar valor a la sesión
isset($_SESSION["clave"])   // Verificar si existe una variable de sesión
unset($_SESSION["clave"])   // Eliminar una variable de sesión
session_destroy();           // Destruir toda la sesión
</pre>';

echo "<h3>Ejemplo de login y cierre de sesión</h3>";
echo '<pre>// Login
session_start();
$_SESSION["user"] = $usuario;
// ...
// Cerrar sesión
session_destroy();
unset($_SESSION["user"]);
</pre>';

echo "<h3>Buenas prácticas</h3>";
echo '<pre>- No guardes contraseñas en texto plano en la sesión
- Siempre limpia las variables de sesión sensibles al cerrar sesión
- Protege las páginas que requieren sesión activa
- Usa session_start() al inicio de cada script que use sesiones
</pre>'; 