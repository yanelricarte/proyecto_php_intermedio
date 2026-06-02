<?php
session_start();
if (isset($_SESSION['admin'])) {

    include("header.php"); ?>
    <section class="contenedor_cargar">
        <?php
        //código captcha
        $nro1 = rand(0, 9);
        $nro2 = rand(0, 9);
        $nro3 = rand(0, 9);
        $letra = array('a', 'h', 'g', 'l', 'd', 'm', 'k');
        $simbolo = array('%', '$', '/', '@', '#');
        $mezcla_letra = rand(0, 6);
        $mezcla_simbolo = rand(0, 4);

        $_SESSION['codigo_captcha'] = $nro1 . $letra[$mezcla_letra] . $nro2 . $simbolo[$mezcla_simbolo] . $nro3;


        ?>
        <h2 class="titulo"> Cargar personajes</h2>
        <form class="formulario" method="POST" action="cargar_personaje.php" enctype="multipart/form-data">
            <input type="text" name="nombre" required placeholder="Nombre">
            <input type="text" name="apellido" required placeholder="apellido">
            <input type="file" name="imagen" required placeholder="Imagen">
            <select name="estado" id="">
                <option value="procesando"> Procesando</option>
                <option value="finalizado"> Finalizado</option>
            </select>

            <textarea name="descripcion" required placeholder="Descripcion" rows="6"></textarea>

            <img src="captcha.php">
            <input type="text" name="captcha">
            <input type="submit" value="Cargar empleado">
        </form>
        <?php
        if (isset($_GET['error_codigo'])) {
            echo "<h3> codigo de verificacion incorrecto </h3>";
        }
        if (isset($_GET['ok'])) {
            echo "<h3> Empleado cargado con exito </h3>";
        }
        if (isset($_GET['error'])) {
            echo "<h3> Imagen incorrecta. Verifique formato y tamaño (max 200kb)</h3>";
        }
        ?>

    </section>

    <?php include("footer.php"); ?>

    </body>

    </html>

<?php
} else {
    header("Location:index.php");
}
?>