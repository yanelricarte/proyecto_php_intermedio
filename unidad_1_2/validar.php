<?php
session_start();

include('conexion.php');

$usuario = $_POST['usuario'] ?? '';
$clave   = $_POST['clave'] ?? '';

// Sentencia preparada: el dato del usuario nunca se concatena al SQL,
// así se evita la inyección SQL (ej. ' OR '1'='1).
$consulta = mysqli_prepare($conexion_db, "SELECT clave FROM administradores WHERE dni = ?");
mysqli_stmt_bind_param($consulta, "i", $usuario);
mysqli_stmt_execute($consulta);
$resultado = mysqli_stmt_get_result($consulta);
$admin = mysqli_fetch_assoc($resultado);

// password_verify() compara la clave ingresada contra el hash guardado.
if ($admin && password_verify($clave, $admin['clave'])) {
    $_SESSION['admin'] = $usuario;
    header('Location:carga.php');
} else {
    header('Location: index.php?error');
}
exit;
