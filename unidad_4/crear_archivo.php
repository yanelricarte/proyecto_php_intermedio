<?php
$archivo = @fopen("ejemplo3.txt", "x");

if ($archivo === false) {
    echo "El archivo ya existe o no se pudo crear.";
} else {
    echo "Archivo creado exitosamente.";
    fclose($archivo);
}