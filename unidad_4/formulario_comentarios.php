<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Comentarios</title>
</head>

<body>
    <h1>Formulario de Comentarios</h1>

    <form action="guardar_comentario.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="apellido" placeholder="Apellido">
        <textarea name="msj" cols="30" rows="10" placeholder="Escribe tu comentario..."></textarea>
        <input type="submit" value="Enviar comentario">
    </form>

</body>

</html>