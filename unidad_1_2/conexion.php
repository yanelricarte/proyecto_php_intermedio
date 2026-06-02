<?php 
$conexion_db = mysqli_connect("localhost", "root", "", "php_intermedio_872"); 
if (!$conexion_db) {
    die("Conexión fallida: " . mysqli_connect_error());
}
