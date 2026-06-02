<?php
$archivo_ruta = "comentarios.txt";

if (!file_exists($archivo_ruta) || filesize($archivo_ruta) === 0) {
    echo "<p>No hay comentarios aun.</p>";
} else {
    // Abrir en modo lectura
    $archivo = fopen($archivo_ruta, "r");
    $tamanio = filesize($archivo_ruta);
    $contenido = fread($archivo, $tamanio);
    echo "<h2>Comentarios guardados:</h2>";
    echo $contenido;

    // Procesar: contar comentarios
    $comentarios = explode("<h3>", $contenido);
    $cantidadLienas = count($comentarios) - 1; // Restar 1 porque el primer elemento no es un comentario
    echo "<p>Total de comentarios: " . $cantidadLienas . "</p>";

    fclose($archivo);
}
