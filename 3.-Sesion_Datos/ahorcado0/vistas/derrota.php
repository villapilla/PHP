<!DOCTYPE html> 
<html>
        <head>
            <meta charset="UTF-8">
            <title>Juego del ahorcado</title>
            <link rel="stylesheet" href="css/login.css">
        </head>
        <body>
             <main id="login">
                <h1>Has perdido</h1>
                 <img src="img/ahorcado<?php echo $partida->getFallos().".png";?>">
                <?php
                   echo "<h2>La palabra es: ". $partida->getPalabraSecreta(). "</h2>";
                   echo "<h3>Despues de: ". $partida->getIntentos(). " intentos";
                ?>
                <form action="../index.php" method="POST">
                    <input type="submit" name="nuevaPartida" value="Volver a Jugar">
                </form>
                <form action="../index.php" method="POST">
                    <input type="submit" name="cierraSesion" value="Cerrar Sesion">
                </form>
                 <form action="../index.php" method="POST">
                    <input class="segundo_boton" type="submit" name="partidas" value="Menu Principal"/>
                </form>
             </main>
        </body>
</html>
