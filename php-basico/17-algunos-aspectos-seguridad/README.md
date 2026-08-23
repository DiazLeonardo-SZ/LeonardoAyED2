# Aspectos de Seguridad en PHP

La seguridad es fundamental en cualquier aplicación web. PHP ofrece herramientas y configuraciones para proteger tus datos y tu servidor.

## Buenas prácticas y configuraciones recomendadas

| Tema / Función                | Recomendación / Advertencia                                                                 |
|-------------------------------|-------------------------------------------------------------------------------------------|
| `php.ini`                     | No mostrar errores en producción (`display_errors = Off`).                                |
|                               | Deshabilitar `allow_url_include` y limitar permisos de subida de archivos.                |
| Contraseñas                   | Nunca guardar en texto plano. Usa `password_hash()` y `password_verify()`.                |
| Hash inseguros                | No uses `md5()`, `sha1()`, ni `crypt()` para contraseñas.                                 |
| Base64                        | No es cifrado ni seguro, solo codificación. No expongas datos sensibles con base64.       |
| Validación de datos           | Valida y sanitiza siempre los datos recibidos por GET, POST, y formularios.               |
| Números aleatorios            | Usa `random_int()` para seguridad, no `rand()` ni `mt_rand()`.                            |
| Subida de archivos            | Limita tamaño, tipo y ubicación de archivos subidos.                                      |
| Variables de entorno          | Usa variables de entorno para credenciales y datos sensibles.                             |

## Ejemplo de configuración segura en php.ini

```ini
display_errors = Off
allow_url_include = Off
file_uploads = On
upload_max_filesize = 10M
max_execution_time = 30
memory_limit = 128M
```

## Advertencias

- Una mala configuración puede exponer información sensible o permitir ataques.
- Base64 NO es seguridad, solo codificación para transporte de datos.
- Nunca uses algoritmos de hash inseguros para contraseñas.
- Valida y escapa siempre los datos de entrada y salida.

## Enlaces útiles

- [Configuración de php.ini (manual oficial)](https://www.php.net/manual/es/ini.core.php)
- [password_hash() y seguridad de contraseñas](https://www.php.net/manual/es/function.password-hash.php)
- [Validación y filtrado de datos](https://www.php.net/manual/es/filter.filters.sanitize.php)
- [Seguridad en PHP (manual oficial)](https://www.php.net/manual/es/security.php)

---

> **Resumen:**
> La seguridad en PHP depende de una buena configuración, el uso de funciones modernas y la validación constante de los datos. No confíes en la codificación simple ni en algoritmos obsoletos para proteger información sensible. 