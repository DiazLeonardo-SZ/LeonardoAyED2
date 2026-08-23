<?php
session_start();
/*
Para manejar sesiones utilizamos el array global $_SESSION que está
disponible en todo nuestro entorno de PHP y podemos acceder a él siempre
y cuando esté al inicio del script la función session_start().
El array $_SESSION podemos llenarlo con los datos que necesitemos
creando los índices y asignándoles valores.
¡Advertencia! No guardes contraseñas en texto plano en la sesión.
*/

// Asignar valores a la sesión
$_SESSION['id'] = 1;
$_SESSION['rol'] = 2;
$_SESSION['user'] = "aromano";
$_SESSION['pass'] = "123"; // No recomendado en producción

echo "Se creó el array SESSION<br>";

// Acceder a los valores de la sesión
echo "ID: ".$_SESSION['id']."<br>";
echo "Rol: ".$_SESSION['rol']."<br>";
echo "Usuario: ".$_SESSION['user']."<br>";
// Nunca muestres la contraseña en producción
