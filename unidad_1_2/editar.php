<?php
session_start();

// Guard de sesión: solo un admin logueado puede modificar datos.
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit;
}

include("conexion.php");

$id_per = (int) ($_GET['id'] ?? 0);

// Sentencia preparada para evitar inyección SQL desde la URL (?id=).
$consulta = mysqli_prepare($conexion_db, "UPDATE personajes SET estado = 'finalizado' WHERE id_per = ?");
mysqli_stmt_bind_param($consulta, "i", $id_per);
mysqli_stmt_execute($consulta);

header("Location: ver.php");
exit;
