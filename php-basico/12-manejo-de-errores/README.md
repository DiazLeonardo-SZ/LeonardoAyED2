# Manejo de Errores en PHP

El manejo adecuado de errores es fundamental para el desarrollo de aplicaciones robustas y seguras. PHP ofrece varias formas de gestionar errores y excepciones.

## Tabla de funciones y operadores comunes

| Función/Operador         | Descripción                                                                 |
|-------------------------|-----------------------------------------------------------------------------|
| `error_reporting()`     | Establece el nivel de reporte de errores.                                   |
| `ini_set()`             | Cambia valores de configuración en tiempo de ejecución (ej. display_errors). |
| `die()` / `exit()`      | Termina la ejecución del script mostrando un mensaje.                       |
| `set_error_handler()`   | Define una función personalizada para manejar errores.                      |
| `throw` / `try-catch`   | Manejo de excepciones.                                                      |
| `finally`               | Bloque que se ejecuta siempre tras try-catch.                               |
| `@` (supresión)         | Oculta mensajes de error (no recomendado).                                  |

## Mejores prácticas

- **No mostrar errores en producción:** Configura `display_errors = Off` y usa logs.
- **Valida entradas y operaciones:** Evita errores controlando condiciones antes de operar.
- **Usa excepciones para errores críticos:** Especialmente en aplicaciones grandes.
- **Registra errores:** Utiliza logs para guardar información útil para depuración.
- **No uses @ para ocultar errores importantes:** Prefiere el manejo explícito.
- **Libera recursos en finally:** Cierra archivos, conexiones, etc.

## Advertencias de seguridad

- Nunca muestres detalles de errores en producción, pueden revelar información sensible.
- No almacenes contraseñas ni datos sensibles en mensajes de error o logs sin protección.

## Enlaces útiles

- [Manejo de errores en PHP (manual oficial)](https://www.php.net/manual/es/errorfunc.php)
- [Excepciones en PHP](https://www.php.net/manual/es/language.exceptions.php)
- [set_error_handler](https://www.php.net/manual/es/function.set-error-handler.php)

---

> **Resumen:**
> El manejo de errores en PHP debe ser claro, seguro y didáctico. Usa las herramientas adecuadas para cada caso y sigue las mejores prácticas para evitar problemas de seguridad y facilitar la depuración. 