<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Suduku</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <h1>Bienvenido a Suduku</h1>
        <h3>Rellena las casillas con los numeros correctos</h3>
        <form action="procesaResultado.php" method="POST">
        <?php
            include 'vistas/tablero.php'
        ?>
            <input class = "submit" type="submit" value="Enviar" name="botonenvio">
        </form> 
    </body>
</html>
