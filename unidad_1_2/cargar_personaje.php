<?php
session_start();

// Guard de sesión: solo un admin logueado puede cargar personajes.
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit;
}

include("conexion.php");

$codigo_captcha = $_POST['captcha'] ?? '';

// hash_equals(): comparación segura del captcha (evita comparaciones laxas).
if (!isset($_SESSION['codigo_captcha']) || !hash_equals($_SESSION['codigo_captcha'], $codigo_captcha)) {
    header("Location:carga.php?error_codigo");
    exit;
}

$nombre_per      = $_POST["nombre"] ?? '';
$apellido_per    = $_POST["apellido"] ?? '';
$descripcion_per = $_POST["descripcion"] ?? '';
$estado_per      = $_POST["estado"] ?? 'procesando';

$tmp_img    = $_FILES['imagen']['tmp_name'] ?? '';
$tamanio_img = $_FILES['imagen']['size'] ?? 0;

// Validar que sea una imagen REAL leyendo el archivo (no el tipo que manda el
// navegador, que es falsificable). getimagesize() devuelve false si no es imagen.
$info_img = $tmp_img ? @getimagesize($tmp_img) : false;
$tipos_permitidos = [
    IMAGETYPE_JPEG => 'jpg',
    IMAGETYPE_PNG  => 'png',
    IMAGETYPE_GIF  => 'gif',
    IMAGETYPE_WEBP => 'webp',
];

if ($info_img === false || !isset($tipos_permitidos[$info_img[2]]) || $tamanio_img > 200000) {
    header("Location: carga.php?error");
    exit;
}

// Nombre de archivo aleatorio: evita sobrescribir y subir un .php renombrado.
$extension  = $tipos_permitidos[$info_img[2]];
$nombre_img = bin2hex(random_bytes(8)) . '.' . $extension;
$destino    = 'imagenes/' . $nombre_img;

if (!move_uploaded_file($tmp_img, $destino)) {
    header("Location: carga.php?error");
    exit;
}

// Sentencia preparada: los datos del formulario nunca se concatenan al SQL.
$consulta = mysqli_prepare(
    $conexion_db,
    "INSERT INTO personajes (nombre, apellido, imagen, descripcion, estado) VALUES (?, ?, ?, ?, ?)"
);
mysqli_stmt_bind_param($consulta, "sssss", $nombre_per, $apellido_per, $nombre_img, $descripcion_per, $estado_per);
mysqli_stmt_execute($consulta);

header("Location:carga.php?ok");
exit;
