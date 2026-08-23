# Namespaces en PHP

Esta carpeta contiene ejemplos para aprender y practicar el uso de namespaces (espacios de nombres) en PHP. Los namespaces permiten organizar y evitar conflictos de nombres en proyectos grandes.

## Contenido

- **01-crear-espacio-de-nombres.php**: Cómo definir un namespace y para qué sirve.
- **02-sub-espacio.php**: Subespacios de nombres (namespaces anidados).
- **03-definir-varios-namespaces.php**: Definir varios namespaces en un solo archivo.
- **04-llamar-a-un-namespace.php**: Diferentes formas de acceder a elementos de un namespace.
- **05-caracteristicas-dinamicas.php**: Acceso dinámico a clases, funciones y constantes usando variables.
- **06-uso-de-los-namespace.php**: Uso del comando `use` para importar clases, funciones y constantes.
- **perro.php**: Ejemplo de namespace anidado para una raza de perro.
- **use.php**: Ejemplo de namespace con varias clases, funciones y constantes.

---

## Material complementario

### ¿Qué es un namespace?
Un namespace es como una carpeta virtual que agrupa clases, funciones y constantes bajo un mismo "apellido" para evitar conflictos de nombres.

### ¿Por qué usar namespaces?
- Permiten tener clases con el mismo nombre en diferentes partes del proyecto.
- Facilitan la organización del código en proyectos grandes.
- Son esenciales para trabajar con librerías de terceros.

### Sintaxis básica
```php
namespace MiProyecto;
class MiClase {}
function miFuncion() {}
const MI_CONSTANTE = 123;
```

### Acceso a elementos de un namespace
- **No cualificado**: `miFuncion()` (dentro del mismo namespace)
- **Cualificado**: `Otro\miFuncion()` (namespace relativo)
- **Completamente cualificado**: `\MiProyecto\miFuncion()` (desde la raíz)

### Importar con use
```php
use MiProyecto\MiClase;
use function MiProyecto\miFuncion;
use const MiProyecto\MI_CONSTANTE;
```

### Alias y agrupación
```php
use MiProyecto\MiClase as ClaseAlias;
use MiProyecto\{Clase1, Clase2};
```

---

## Ejercicios propuestos

1. **Conflicto de nombres**
   - Crea dos archivos con una clase `Mascota` en diferentes namespaces y úsalas en un tercer archivo.
2. **Subespacios**
   - Define un namespace anidado (ej: `App\Model\Usuario`) y crea una clase dentro de él. Instánciala desde otro archivo.
3. **Importar con use**
   - Importa varias clases y funciones de un namespace usando `use` y alias.
4. **Acceso dinámico**
   - Usa una variable para instanciar una clase de un namespace de forma dinámica.
5. **Varios namespaces en un archivo**
   - Define dos namespaces en un archivo y accede a sus elementos desde fuera.

---

## Recursos adicionales
- [Manual oficial de PHP: Namespaces](https://www.php.net/manual/es/language.namespaces.php)
- [PSR-4: Autoloading Standard](https://www.php-fig.org/psr/psr-4/)

---

¡Explora los archivos, modifica el código y experimenta! La mejor forma de aprender es practicando. 