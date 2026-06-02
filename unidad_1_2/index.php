<?php include("header.php"); ?>
<section class="contenedor_cargar">

<h2 class="titulo"> Ingreso</h2>
    <form class="formulario" method="POST" action="validar.php">
        <input type="text" name="usuario" required placeholder="Usuario">
        <input type="password" name="clave" required placeholder="contraseña">

        <input type="submit" value="Ingresar">
    </form>
    <?php
    if (isset($_GET['error'])) {
        echo "<h3> Datos incorrectos </h3>";
    }
    ?>

</section>

<?php include("footer.php"); ?>



</body>

</html>