<?php
session_start();
$codigo_captcha = $_POST['captcha'];

if ($codigo_captcha == $_SESSION['codigo_captcha']) {

    include("conexion.php");

    $nombre_per = $_POST['nombre'];
    $apellido_per = $_POST['apellido'];
    //$imagen_per = $_POST['imagen'];
    $descripcion_per = $_POST['descripcion'];
    $estado_per = $_POST['estado'];

    $nombre_img = $_FILES['imagen']['name'];
    $tamanio_img = $_FILES['imagen']['size'];
    $tipo_img = $_FILES['imagen']['type'];
    $tmp_img = $_FILES['imagen']['tmp_name'];

    $destino = 'imagenes/' . $nombre_img;

    if (($tipo_img != 'image/jpeg' && $tipo_img != 'image/jpg' && $tipo_img != 'image/png') or   $tamanio_img > 200000) {
        header('Location: cargar.php?error');
    } else {
        move_uploaded_file($tmp_img, $destino);

        mysqli_query($conexion_db, " INSERT INTO personajes() VALUES(DEFAULT, '$nombre_per', '$apellido_per', '$nombre_img', '$descripcion_per', '$estado_per')");

        mysqli_close($conexion_db);

        header("Location:cargar.php?ok");
    }
} else {
    header("Location:cargar.php?error_codigo");
}
