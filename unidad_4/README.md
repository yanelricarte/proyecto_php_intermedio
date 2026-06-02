# 📂 Unidad 4 — Manejo de Archivos

> **Temas:** fopen(), fwrite(), fread(), fputs(), fclose(), file_exists(), filesize()

## Archivos

| Archivo | Descripción |
|---------|-------------|
| [`crear_archivo.php`](crear_archivo.php) | Crear un archivo con `fopen()` en modo `"x"` (solo si no existe) |
| [`formulario_comentarios.php`](formulario_comentarios.php) | Formulario HTML para enviar comentarios |
| [`guardar_comentario.php`](guardar_comentario.php) | Guarda comentarios en un archivo de texto con `fopen()` + `fputs()` |
| [`leer_comentarios.php`](leer_comentarios.php) | Lee y muestra los comentarios guardados con `fread()`, cuenta con `explode()` |

## Cómo probar

1. Abrir [`formulario_comentarios.php`](formulario_comentarios.php) en el navegador
2. Completar nombre, apellido y comentario
3. Enviar — el comentario se guarda en `comentarios.txt`
4. Abrir [`leer_comentarios.php`](leer_comentarios.php) para ver todos los comentarios
5. Probar [`crear_archivo.php`](crear_archivo.php) para ver el modo `"x"` en acción
