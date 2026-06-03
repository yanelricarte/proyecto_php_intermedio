<?php

session_start();
if (isset($_SESSION['admin'])) {

    include("header.php"); ?>
    <section class="contenedor_personajes">
        
        <?php include("conexion.php");
        $consultas_db = mysqli_query($conexion_db, "SELECT * FROM personajes");
        while ($mostrar_datos = mysqli_fetch_assoc($consultas_db)) {


        ?>
            <div class="caja_personajes">
                <?php // htmlspecialchars() escapa la salida para evitar XSS almacenado. ?>
                <h2><?php echo htmlspecialchars($mostrar_datos['nombre'] . " " . $mostrar_datos['apellido']); ?></h2>
                <img src="imagenes/<?php echo htmlspecialchars($mostrar_datos['imagen']); ?>" alt="">
                <h3>Estado: <?php echo htmlspecialchars($mostrar_datos['estado']); ?></h3>
                <p><?php echo htmlspecialchars($mostrar_datos['descripcion']); ?></p>
            
                <p> <a href="eliminar.php?id=<?php echo $mostrar_datos['id_per']; ?>">Eliminar</a></p>
                <p> <a href="editar.php?id=<?php echo $mostrar_datos['id_per']; ?>">Finalizar Pedido</a></p>


            </div>
        <?php
        } ?>
        <div class="borrar"> </div>
    </section>
    <?php include("footer.php");

    ?>

<?php
} else {
    header("Location:index.php");
}

?>