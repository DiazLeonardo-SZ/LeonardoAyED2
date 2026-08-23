# Funciones Matemáticas en PHP

PHP ofrece una amplia variedad de funciones matemáticas para realizar cálculos, redondeos, generación de números aleatorios y más.

## Tabla de funciones comunes

| Función / Método      | Descripción                                                        |
|----------------------|--------------------------------------------------------------------|
| `round()`            | Redondea al entero más cercano                                     |
| `floor()`            | Redondea hacia abajo (entero menor o igual)                        |
| `ceil()`             | Redondea hacia arriba (entero mayor o igual)                       |
| `abs()`              | Valor absoluto                                                      |
| `pow()`              | Potencia (ej. pow(2,3) = 8)                                        |
| `sqrt()`             | Raíz cuadrada                                                       |
| `min()` / `max()`    | Mínimo / máximo de una lista de valores                            |
| `rand()` / `mt_rand()` | Números aleatorios (no seguros para criptografía)                |
| `random_int()`       | Números aleatorios seguros para criptografía (PHP 7+)              |

## Mejores prácticas

- **Usa `random_int()` para propósitos de seguridad (contraseñas, tokens, etc.).**
- **Ten en cuenta la precisión de los números flotantes, especialmente en cálculos financieros.**
- **Consulta la documentación para funciones matemáticas avanzadas (trigonometría, logaritmos, etc.).**

## Advertencias

- La precisión de los números flotantes puede variar según el sistema y la configuración de PHP.
- `rand()` y `mt_rand()` no son adecuados para seguridad; pueden ser predecibles.
- `round()`, `floor()` y `ceil()` tienen comportamientos distintos: elige el adecuado para tu caso.

## Enlaces útiles

- [Funciones matemáticas en PHP (manual oficial)](https://www.php.net/manual/es/ref.math.php)
- [random_int()](https://www.php.net/manual/es/function.random-int.php)
- [Precisión de números flotantes](https://www.php.net/manual/es/language.types.float.php)

---

> **Resumen:**
> Usa las funciones matemáticas de PHP según la necesidad de tu aplicación. Presta atención a la precisión y a la seguridad al generar números aleatorios. 