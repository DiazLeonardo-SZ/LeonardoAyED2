# Funciones de String en PHP

Las cadenas de texto (strings) son fundamentales en PHP. Existen muchas funciones para manipular, buscar, extraer, reemplazar y validar strings.

## Tabla de funciones comunes

| Función / Método         | Descripción                                                        |
|-------------------------|--------------------------------------------------------------------|
| `strlen()` / `mb_strlen()` | Longitud de la cadena (bytes / caracteres multibyte)            |
| `strstr()` / `stristr()` | Buscar un string dentro de otro (devuelve el resto del string)     |
| `strpos()` / `stripos()` | Buscar la posición de un string (sensible / insensible a mayúsc.)  |
| `substr()` / `mb_substr()` | Extraer parte de un string (bytes / multibyte)                  |
| `strtoupper()` / `mb_strtoupper()` | Convertir a mayúsculas (bytes / multibyte)              |
| `strtolower()` / `mb_strtolower()` | Convertir a minúsculas (bytes / multibyte)              |
| `ucwords()` / `ucfirst()` | Mayúscula en palabras / primera letra                             |
| `str_replace()`           | Reemplazar partes de un string                                    |
| `wordwrap()`              | Ajustar longitud de un string con saltos de línea                |
| `trim()` / `ltrim()` / `rtrim()` | Quitar espacios o caracteres al inicio/final              |
| `explode()` / `implode()` | Separar y juntar strings con arrays                               |

## Mejores prácticas

- **Prefiere funciones multibyte (`mb_*`) para UTF-8 y caracteres especiales.**
- **Limpia los datos de entrada con `trim()` antes de validar o guardar.**
- **Usa comparación estricta (`=== false`) con `strpos` y similares.**
- **Ten cuidado con la codificación de caracteres en toda la aplicación.**
- **Para búsquedas insensibles a mayúsculas, usa las funciones con "i" (ej. `stripos`).**

## Advertencias

- Las funciones normales (`str*`) trabajan por bytes, pueden fallar con tildes, eñes y otros caracteres especiales.
- Si el separador no existe en `explode()`, devuelve un array con el string original.
- `implode()` de un array vacío devuelve una cadena vacía.
- El reemplazo con `str_replace()` es global y sensible a mayúsculas/minúsculas.

## Enlaces útiles

- [Funciones de string en PHP (manual oficial)](https://www.php.net/manual/es/ref.strings.php)
- [Funciones multibyte (mbstring)](https://www.php.net/manual/es/book.mbstring.php)
- [Validación y limpieza de datos](https://www.php.net/manual/es/filter.filters.sanitize.php)

---

> **Resumen:**
> Usa las funciones de string de PHP de forma segura y eficiente. Presta atención a la codificación y a los detalles de cada función para evitar errores y problemas de compatibilidad. 