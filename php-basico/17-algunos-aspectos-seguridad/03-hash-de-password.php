<?php 
/**
 * Hash de contraseñas en PHP
 * ¡Advertencia! Nunca uses md5(), sha1() ni guardes contraseñas en texto plano.
 * Usa password_hash() y password_verify() para máxima seguridad.
 *
 * password_hash() genera un hash seguro con salt aleatorio y algoritmo moderno.
 * password_verify() compara la contraseña ingresada con el hash almacenado.
 *
 * @link https://www.php.net/manual/en/function.password-hash.php
 * @link https://www.php.net/manual/en/function.password-verify.php
 * @link https://diego.com.es/encriptacion-y-contrasenas-en-php
 */

$pass = "password123";

# Métodos INSEGUROS (NO USAR)
# echo sha1($pass)."<br>";
# echo md5($pass)."<br>";

// Hash seguro
$hash = password_hash($pass, PASSWORD_DEFAULT);

echo "La clave encriptada tiene ".strlen($hash)." caracteres<br>";
echo $hash."<br><br>";

// Verificación correcta
if (password_verify($pass, $hash)) {
    echo "Password correcto!!<br>";
} else {
    echo "Password incorrecto.<br>";
}

// Verificación fallida
echo "Intento con clave errónea: ";
if (password_verify("otra_clave", $hash)) {
    echo "Password correcto!!<br>";
} else {
    echo "Password incorrecto.<br>";
}

// ¡Consejo! Nunca guardes contraseñas en texto plano ni uses algoritmos inseguros.