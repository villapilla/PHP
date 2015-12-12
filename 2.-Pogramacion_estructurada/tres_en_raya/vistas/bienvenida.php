<html>
    <head>
        <title>3 en Raya</title>
        <link rel="stylesheet" href="css/estilos.css">
        <script src="js/introduceImagen.js"></script>
    </head>
    <body>
        <h1>BIENVENIDO AL JUEGO</h1>
        <h2>Introduce tu jugada</h2>
        <form action="procesaJugada.php" method="POST">
            <?php
                include 'vistas/tablero.php';
            ?>
            <input id="submit" type="submit" name="botonenvio" value="Jugar">
        </form>
    </body>
</html>



