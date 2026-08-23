<?php 
/*
 Para borrar una cookie, la manera más segura es crear la cookie 
 con el mismo nombre, con un valor "vacío" y una fecha de 
 expiración "vencida".
¡Advertencia! El borrado puede no ser inmediato en todos los navegadores y rutas.
*/
setcookie('datos', "", time()-1);
echo "Cookie 'datos' marcada para borrar.<br>";
// Recuerda: la cookie se eliminará en la próxima petición del navegador.
