<!DOCTYPE html>
<html>
    <head>
        <title>3 en Raya</title>
        <link rel="stylesheet" href="css/estilos.css">
        <script src="js/introduceImagen.js"></script>
    </head>
    <body>
        <h1>Tablas</h1>
        <form action="index.php" method="POST">
            <?php
                include 'vistas/tablero.php';
            ?>
            <input id="submit" type="submit" name="botonenvio" value="Volver a Jugar">
        </form>
    </body>
</html>
