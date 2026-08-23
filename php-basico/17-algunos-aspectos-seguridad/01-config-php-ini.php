<?php 
/**
 * El archivo php.ini establece la configuración global de PHP.
 * Es fundamental ajustar estas directivas según el entorno (desarrollo o producción).
 *
 * ¡Advertencia! Una mala configuración puede exponer tu aplicación a riesgos de seguridad.
 *
 * Ubicación típica: /usr/local/etc/php/php.ini
 *
 * Principales directivas a revisar:
 *
 * - display_errors: Muestra errores en pantalla. Útil en desarrollo, peligroso en producción.
 *   Ejemplo seguro: display_errors = Off (en producción)
 * - max_execution_time: Tiempo máximo de ejecución de un script (segundos).
 *   Ejemplo: max_execution_time = 30
 * - memory_limit: Límite de memoria para scripts PHP.
 *   Ejemplo: memory_limit = 128M
 * - upload_max_filesize: Tamaño máximo de archivos subidos.
 *   Ejemplo: upload_max_filesize = 10M
 * - file_uploads: Habilita/deshabilita la subida de archivos.
 *   Ejemplo: file_uploads = On
 * - upload_tmp_dir: Directorio temporal para archivos subidos.
 * - allow_url_include: Permite incluir archivos remotos. ¡Debe estar Off en producción!
 *   Ejemplo seguro: allow_url_include = Off
 *
 * ¡Consejo! Mantén configuraciones estrictas en producción y revisa la documentación oficial.
 * @link https://www.php.net/manual/en/ini.core.php
 */
