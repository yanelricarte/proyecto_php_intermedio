<?php include('header.php');
session_start();

//Varificar si hay mensaje y mostrarlo

if (isset($_SESSION['mensaje'])) {
  echo '<p>' . $_SESSION['mensaje'] . '</p>';
  //Limpiar mensaje después de mostrarlo 
  unset($_SESSION['mensaje']);
}


?>

<section class="contenedor_carga">
  <h3> Ingreso </h3>

  <form action="validar.php" method="post" class="formulario">
    <label for="usuario"> Usuario</label>
    <input type="text" name="usuario" placeholder="Usuario" required>
    <label for="clave"> Clave</label>
    <input type="password" name="clave" placeholder="Ingrese su contraseña" required pattern="[A-Za-z0-9!?-]{8,12}">
    <input type="submit" value="Ingresar">

  </form>

  <?php
  if (isset($_GET['error'])) {
    echo "<h3> Datos incorrectos </h3>";
  }
  ?>
</section>
</body>

</html>