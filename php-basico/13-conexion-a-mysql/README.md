# Conexión a MySQL con PHP y PDO

Conectar y trabajar con bases de datos es una de las tareas más comunes en PHP. PDO (PHP Data Objects) es la forma recomendada por su flexibilidad, seguridad y soporte para múltiples motores de bases de datos.

## Tabla de funciones y métodos comunes de PDO

| Método/Función                | Descripción                                                        |
|-------------------------------|--------------------------------------------------------------------|
| `new PDO()`                   | Crea una nueva conexión a la base de datos.                        |
| `setAttribute()`              | Configura atributos de la conexión (ej. manejo de errores).        |
| `exec()`                      | Ejecuta una consulta SQL sin retorno de resultados.                |
| `prepare()`                   | Prepara una consulta SQL para su ejecución segura.                 |
| `execute()`                   | Ejecuta una consulta preparada.                                    |
| `fetch()` / `fetchAll()`      | Obtiene resultados de una consulta.                                |
| `rowCount()`                  | Devuelve el número de filas afectadas/obtenidas.                   |
| `errorInfo()`                 | Devuelve información sobre el último error de la base de datos.    |

## Mejores prácticas

- **Usa siempre consultas preparadas:** Evita la inyección SQL y mejora la seguridad.
- **No expongas credenciales en el código:** Usa variables de entorno o archivos de configuración fuera del directorio público.
- **Maneja los errores con try-catch:** No muestres detalles de errores en producción.
- **Libera recursos:** Asigna `null` a los objetos PDO y sentencias cuando termines.
- **Configura el charset:** Usa `set names utf8` o el atributo correspondiente para evitar problemas de codificación.

## Advertencias de seguridad

- Nunca muestres detalles de conexión o errores en producción.
- No uses el usuario root en producción; crea usuarios con permisos limitados.
- No almacenes contraseñas en texto plano.

## Enlaces útiles

- [PDO en PHP (manual oficial)](https://www.php.net/manual/es/book.pdo.php)
- [Consultas preparadas y seguridad](https://www.php.net/manual/es/pdo.prepared-statements.php)
- [Manejo de errores con PDO](https://www.php.net/manual/es/pdo.error-handling.php)

---

> **Resumen:**
> Usar PDO para la conexión y manejo de bases de datos en PHP es la opción más segura y flexible. Sigue las mejores prácticas y mantén tus credenciales protegidas para desarrollar aplicaciones robustas y seguras. 