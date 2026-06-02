<?php

if (!isset($_POST['nombre'], $_POST['apellido'], $_POST['msj'])) {
    echo "<p style='color:red;'>Error: faltan datos del formulario.</p>";
    exit;
}

// Escapar caracteres especiales para evitar inyección de código
$nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
$apellido = htmlspecialchars($_POST['apellido'], ENT_QUOTES, 'UTF-8');
$msj = htmlspecialchars($_POST['msj'], ENT_QUOTES, 'UTF-8');


// Guardar el comentario en un archivo de texto

$fecha_actual = date("l/M/Y");

$texto = "<h3> Nombre: " . $nombre . " "
    . "Apellido: " . $apellido . "</h3>" . "\n"
    . "<p> Comentario: " . $msj . "</p>"
    . "<h5>Fecha comentario: " . $fecha_actual . "</h5>\n";


    $archivo = fopen("comentarios.txt", "a");

if ($archivo === false) {
    echo "<p style='color:red;'>Error: no se pudo abrir el archivo para escribir.</p>";
    exit;
} else {
    fputs($archivo, $texto);
    fclose($archivo);
    echo "<p style='color:green;'>Comentario guardado exitosamente.</p>";
}
