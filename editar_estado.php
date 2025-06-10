<?php
session_start();
//Varificar si el usuario ha iniciado sesíon
if (!isset($_SESSION['admin'])) {
  //Agregar un mensaje para indicar que es necesario iniciar sesión
  $_SESSION['mensaje'] = 'Es necesario iniciar sesión para acceder a esta funcionalidad.';
  header("Location: index.php");
  exit();
}



include("conexion.php");
$id_personaje = $_GET["id"];

mysqli_query($conexion_db,"UPDATE personajes SET estado='finalizado' WHERE id=$id_personaje" );

header("Location:ver.php");
