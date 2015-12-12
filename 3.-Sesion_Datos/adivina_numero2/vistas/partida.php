<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Adivina tu número</title>
    </head>
    <body>
         <?php
            if(!isset($_POST["botonenvio"])) {
                echo "<h1>Bienvenido introduce tu número</h1>";
                include 'vistas/formulario.php';
            } else {
                if($partida->checkNumber($_POST["numero"])) {
                   include 'vistas/ganaJugador.php';
                } else {
                   echo "<h1>Has fallado Vuelve a Intentarlo</h1>";
                   if($_POST["numero"] > $_SESSION["partida"]->getRandom()) {
                       echo "<h2>Número demasiado Grande</h2>";
                   } else {
                       echo "<h2>Numero demasiado pequeño</h2>";
                   }
                   include 'vistas/formulario.php';
                }
            }
         ?>
    </body>
</html>
