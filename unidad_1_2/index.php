<?php
include 'header.php';
?>
    <section class="contenedor_cargar">
        
    <h3> Cargar personajes </h3>

    <form action="cargar_personaje.php" method="post" class="formulario">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido">
        <label for="imagen">Imagen:</label>
        <input type="text" id="imagen" name="imagen">

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion"></textarea>
        <input type="submit" value="Cargar personaje">
    </form>
<?php 
if (isset($_GET['ok'])) {
    echo "<p class='exito'> Personaje cargado con éxito </p>";
}

?>
    </section>

    <?php
    include 'footer.php';
    ?>