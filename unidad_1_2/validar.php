<?php 
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

include('conexion.php');

$consulta = mysqli_query($conexion_db,"SELECT * FROM administradores WHERE dni = $usuario AND clave = '$clave' ");

if (mysqli_num_rows($consulta) == 0){
    header('Location: index.php?error');

} else{
    $_SESSION['admin'] = $_POST['usuario'];
    header('Location:carga.php');
}



// if ($_POST['usuario']=='admin' && $_POST['clave']== 'admin1234'){
//     $_SESSION['admin'] = $_POST['usuario'];
//     header('Location:carga.php');
// } else{
//     header('Location: index.php?error');
// }