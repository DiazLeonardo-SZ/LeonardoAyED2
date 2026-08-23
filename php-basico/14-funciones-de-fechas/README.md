# Funciones de Fechas en PHP

Trabajar con fechas y horas es fundamental en cualquier aplicación. PHP ofrece varias funciones para manipular, formatear y comparar fechas.

## Tabla de funciones comunes

| Función           | Descripción                                                        |
|-------------------|--------------------------------------------------------------------|
| `time()`          | Devuelve el timestamp UNIX actual (segundos desde 1970-01-01).     |
| `date()`          | Devuelve la fecha/hora formateada según el string de formato.      |
| `getdate()`       | Devuelve un array con información detallada de la fecha/hora.      |
| `strtotime()`     | Convierte una cadena de texto a timestamp UNIX.                    |
| `date_default_timezone_set()` | Cambia la zona horaria predeterminada.                 |

## Formatos comunes para date()

| Formato | Significado           | Ejemplo      |
|---------|-----------------------|--------------|
| Y       | Año completo          | 2024         |
| m       | Mes (01-12)           | 03           |
| d       | Día del mes (01-31)   | 26           |
| H       | Hora (00-23)          | 16           |
| i       | Minutos (00-59)       | 05           |
| s       | Segundos (00-59)      | 09           |
| l       | Nombre del día        | Tuesday      |
| D       | Abreviatura del día   | Tue          |

## Mejores prácticas

- **Establece la zona horaria:** Usa `date_default_timezone_set()` para evitar inconsistencias.
- **Prefiere timestamps para cálculos:** Son más fáciles de comparar y manipular.
- **Formatea fechas para mostrar:** Usa `date()` para mostrar fechas legibles al usuario.
- **Evita formatos ambiguos en strtotime():** Usa inglés y frases claras.
- **Ten en cuenta la localización:** Los nombres de días y meses suelen estar en inglés.

## Advertencias

- El resultado de las funciones depende de la zona horaria configurada en PHP.
- Los nombres de días y meses devueltos por `getdate()` están en inglés por defecto.
- `strtotime()` puede interpretar mal cadenas ambiguas o en otros idiomas.

## Enlaces útiles

- [Funciones de fecha y hora en PHP (manual oficial)](https://www.php.net/manual/es/ref.datetime.php)
- [Formatos de date()](https://www.php.net/manual/es/datetime.format.php)
- [strtotime()](https://www.php.net/manual/es/function.strtotime.php)

---

> **Resumen:**
> Usa las funciones de fecha de PHP para manipular y mostrar fechas de forma segura y consistente. Presta atención a la zona horaria y a los formatos para evitar errores y confusiones. 