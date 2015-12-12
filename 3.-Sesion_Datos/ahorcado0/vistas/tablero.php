<?php
  if ($view !== "tablero") {
        header("Location: localhost:8000");
    } else {
?>
<!DOCTYPE html> 
<html>
        <head>
            <meta charset="UTF-8">
            <title>Juego del ahorcado</title>
            <link rel="stylesheet" href="css/login.css">
        </head>
        <body>
            <?php
                $palabra = $partida->getPalabraDescubierta();
                if(isset($victoria)) {
                    include 'vistas/victoria.php';
                } else {
                    if(isset($derrota)) {
                        include 'vistas/derrota.php';
                    } else {
            ?>
             <main id="login">
                <h1>Palabra a descubrir</h1>
            <?php
                echo "<h2 id=\"palabraSecreta\">".$palabra."</h2>";
                echo "<h3>Letras Usadas</h3>";
                echo "<h4>".$partida->getLetrasUsadas()."</h4>";
            ?>
                <form action="../index.php" method="POST">
                    <label for="numero">Introduce una nueva letra:</label>
                    <input type="text" maxlength="1" name="letraUser" required="required" autofocus="autofocus"/>
                    <input type="submit" name="jugada" value="Enviar"/>
                </form>
                <form action="../index.php" method="POST">
                    <input class="segundo_boton" type="submit" name="cierraSesion" value="Cerrar Sesión"/>
                </form>
                <form action="../index.php" method="POST">
                    <input class="segundo_boton" type="submit" name="terminarPartida" value="Parar Partida"/>
                </form>
                <img src="img/ahorcado<?php echo $partida->getFallos().".png";?>">
            </main>
        </body>
    </html>
<?php
                    }
                 }
        }


