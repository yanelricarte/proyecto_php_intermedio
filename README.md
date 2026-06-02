# 🧙 PHP Intermedio — Hogwarts: Sistema de Administración

[![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.x-4479A1?logo=mysql&logoColor=white)](https://mysql.com)
[![License](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE)

> **Repositorio de práctica** — Ejemplos desarrollados en el curso de **PHP Intermedio**.
> Cada unidad presenta conceptos nuevos construyendo sobre los anteriores.

---

## 📂 Estructura del repositorio

```
proyecto_php_intermedio/
│
├── base_de_datos.sql          ← Script para crear la base de datos
├── README.md                  ← Este archivo
│
├── unidad_1_2/                ← Unidades 1 y 2: CRUD + Sesiones + Captcha
│   ├── index.php              ←   Login de administradores
│   ├── validar.php            ←   Validación de credenciales
│   ├── header.php             ←   Header reutilizable (menú de navegación)
│   ├── footer.php             ←   Footer reutilizable
│   ├── conexion.php           ←   Conexión a la base de datos MySQL
│   ├── carga.php              ←   Formulario de carga con captcha
│   ├── cargar_personaje.php   ←   Procesa la carga + subida de imagen
│   ├── ver.php                ←   Listado de personajes con acciones
│   ├── editar.php             ←   Cambiar estado a "finalizado"
│   ├── eliminar.php           ←   Eliminar personaje
│   ├── salir.php              ←   Cerrar sesión
│   ├── captcha.php            ←   Generador de captcha con GD
│   ├── estilos.css            ←   Estilos del sistema
│   └── imagenes/              ←   Imágenes de los personajes
│
├── unidad_3/                  ← Unidad 3: Manejo de fechas
│   ├── fecha/
│   │   ├── index.php          ←   date(), time(), DateTime, strtotime
│   │   ├── ejemplo1.php       ←   date() básico
│   │   └── ejemplo2.php       ←   time(), strtotime(), getdate()
│
├── unidad_4/                  ← Unidad 4: Manejo de archivos
│   ├── README.md              ←   Descripción de los ejemplos
│   ├── crear_archivo.php      ←   fopen() modo "x"
│   ├── formulario_comentarios.php ← Formulario de comentarios
│   ├── guardar_comentario.php ←   Guardar comentarios con fputs()
│   └── leer_comentarios.php   ←   Leer comentarios con fread()
```

---

## 🚀 Cómo usar este proyecto

### 1. Requisitos

- **PHP 8.x** con extensiones: `mysqli`, `gd`
- **MySQL 8.x** o MariaDB
- **Servidor web** (Apache / XAMPP / laragon / etc.)

### 2. Instalación

```bash
# 1. Clonar el repositorio dentro del htdocs de tu servidor
git clone https://github.com/yanelricarte/proyecto_php_intermedio.git

# 2. Importar la base de datos
mysql -u root -p < base_de_datos.sql

# 3. Abrir en el navegador
# http://localhost/proyecto_php_intermedio/unidad_1_2/
```

### 3. Credenciales de prueba

| Usuario (DNI) | Contraseña |
|---------------|------------|
| `12345678`    | `admin1234` |

---

## 📚 Contenido por unidad

### Unidad 1 y 2 — CRUD, Sesiones y Captcha (`unidad_1_2/`)

**Temas cubiertos:**
- ✅ **PHP + MySQL** — Conexión con `mysqli_connect()`
- ✅ **CRUD** — Crear, Leer, Actualizar y Eliminar personajes
- ✅ **Sesiones** — `session_start()`, `$_SESSION`, login/logout
- ✅ **Subida de archivos** — `$_FILES`, `move_uploaded_file()`, validación de tipo y tamaño
- ✅ **Captcha** — Generación de imágenes con `GD library`
- ✅ **Include/Require** — Reutilización de header y footer
- ✅ **Estilos** — CSS responsivo con temática de Harry Potter

**Estructura del formulario de carga:**
```
┌──────────────────────────────────────┐
│         Cargar personaje             │
│                                      │
│  [Nombre]   [Apellido]   [📁 Imagen] │
│                                      │
│  Estado: [▼ Procesando]              │
│                                      │
│  ┌──────────────────────────────────┐│
│  │  Descripción (textarea)          ││
│  └──────────────────────────────────┘│
│                                      │
│  ┌───────┐                           │
│  │ CAPTCHA│  [código...]             │
│  └───────┘                           │
│                                      │
│  [ Cargar personaje ]                │
└──────────────────────────────────────┘
```

### Unidad 4 — Manejo de Archivos (`unidad_4/`)

**Temas cubiertos:**
- ✅ `fopen()` — Apertura de archivos en modo `"a"` (append) y `"x"` (crear exclusivo)
- ✅ `fputs()` — Escritura en archivos
- ✅ `fread()` + `filesize()` — Lectura completa de archivos
- ✅ `fclose()` — Cierre de archivos
- ✅ `file_exists()` — Verificar existencia
- ✅ `htmlspecialchars()` — Sanitización de entrada antes de guardar

### Unidad 3 — Fecha y Hora (`unidad_3/fecha/`)

**Temas cubiertos:**
- ✅ `date()` — Formateo de fechas
- ✅ `time()` — Timestamp UNIX
- ✅ `getdate()` — Array con componentes de fecha
- ✅ `strtotime()` — Manipulación de fechas (+1 week, -1 day, etc.)
- ✅ `DateTime` — Clase para operaciones con fechas
- ✅ `diff()` — Diferencia entre dos fechas
- ✅ `createFromFormat()` — Validación de fechas

---

## 🎯 Objetivos del proyecto

Este repositorio sirve como **material de apoyo** para el curso de PHP Intermedio. Cada unidad se publica después de ser dictada en clase, para que los estudiantes tengan:

- 📖 **Código de referencia** completo y comentado
- 🔍 **Ejemplos prácticos** que pueden probar y modificar
- 📝 **Base para el trabajo práctico** final del curso

---

## 🔜 Próximas unidades

| Unidad | Tema | Estado |
|--------|------|--------|
| 4 | Manejo de archivos (fopen, fwrite, fread) | ✅ Completado |
| 5 | Manejo de imágenes (subir, renombrar, redimensionar) | ⏳ Pendiente |

---

## 📬 Contacto

**Prof. Yanel Ricarte** — [GitHub](https://github.com/yanelricarte)

---

> 🧙 *"La magia está en el código."* — Con ❤️ para la comisión de PHP Intermedio
