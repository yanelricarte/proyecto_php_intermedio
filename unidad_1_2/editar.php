<?php
include("conexion.php");
$id_per=$_GET['id'];
mysqli_query($conexion_db,"UPDATE personajes SET estado = 'finalizado' WHERE id_per = $id_per" );

header("Location: ver.php");