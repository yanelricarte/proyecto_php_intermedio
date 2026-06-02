<?php include('header.php') ?>

<section class="contenedor_personajes">
    <?php include 'conexion.php';
    $consulta_db = mysqli_query($conexion_db, "SELECT * FROM personajes");
    
    while ($mostrar_personaje = mysqli_fetch_array($consulta_db)) {
    ?>
        <div class="caja_personajes">
            <h2><?php echo $mostrar_personaje['nombre'] . ' ' . $mostrar_personaje['apellido']; ?></h2>
            
            <img src="imagenes/<?php echo $mostrar_personaje['imagen']; ?>" alt="<?php echo $mostrar_personaje['nombre']; ?>">
            <p><?php echo $mostrar_personaje['descripcion']; ?></p>
        </div>
    
    <?php
    }
    mysqli_close($conexion_db);
    ?>
</section>


<?php include('footer.php') ?>