<?php
session_start();
if (isset($_SESSION['admin'])) {

  include("header.php");

  // Codigo captcha

  $nro1 = rand(0, 9);
  $nro2 = rand(0, 9);
  $nro3 = rand(0, 9);
  $letra = array('a', 'h', 'g', 'L', 'd', 'm', 'k');
  $simbolo = array('%', '$', '/', '@', '#');
  $mezcla_letra = rand(0, 6);
  $mezcla_simbolo = rand(0, 4);


  $_SESSION['codigo_captcha'] = $nro1 . $letra[$mezcla_letra] . $nro2 . $simbolo[$mezcla_simbolo] . $nro3;

?>

  <section class="contenedor_carga">
    <h3> Cargar personajes</h3>
    <form action="cargar_personaje.php" method="post" class="formulario" enctype="multipart/form-data">
      <input type="text" name="nombre" placeholder="Nombre">
      <input type="text" name="apellido" placeholder="Apellido">
      <div class="box_select">
        <input type="file" name="imagen" placeholder="Imagen">
      </div>
      <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
      <div class="box_select">
        <label for="estado"> Estado: </label>
        <select name="estado" id="">
          <option value="proceso"> en proceso</option>
          <option value="finalizado"> finalizado</option>
        </select>
      </div>

      <img src="captcha.php" alt="captcha">
      <input type="text" name="captcha" placeholder="Ingresa captcha">
      <input type="submit" value="Cargar Personaje">


    </form>

  </section>

<?php

  if (isset($_GET['error_codigo'])) {
    echo "<h3> Código de verificación incorrecto </h3>";
  }


  if (isset($_GET['ok'])) {
    echo "<h3> Personaje cargado con éxito </h3>";
  }

  if (isset($_GET['error'])) {
    echo "<h3> Imagen incorrecta. Verifique formato y el tamaño (max 200kb) </h3>";
  }
} else {
  header("Location:index.php");
}

?>
</body>

</html>