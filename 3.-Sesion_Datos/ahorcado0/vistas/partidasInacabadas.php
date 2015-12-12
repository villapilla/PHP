<!DOCTYPE html>
<?php 
require_once 'class/Collection.php';
    if ($view !== "partidasInacabadas" ) {
        header("Location: localhost:8000");
    } else {
?>    
    <html>
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="../css/login.css">
            <title>Ahorcado</title>
        </head>
        <body>
            <main id="login">
                <?php
                if(!$partidasIniciadas->isEmpty()) {
                    $actual = $partidasIniciadas->iterate();
                    echo "<h1>Elige una partida a Recuperar</h1>";
                    echo "<form action=\"index.php\" method=\"POST\">";
                    while($actual) {
                        $numeroPartida = $partidasIniciadas->getCurrent()->getId_partida();
                        echo "<input type=\"radio\" name=\"partidaRec\" value=\"".$numeroPartida."\"/>Recuperar partida ".$numeroPartida."</input></br>";
                        $actual = $partidasIniciadas->iterate();
                    }
                    echo "</br><input type=\"submit\" name=\"recuperarPartida\" value=\"Recuperar Partida\"/>";
                    echo "</form>";
                }
                if(!$partidasAcabadas->isEmpty()) {
                    echo "<h1>Elige una partida para ver su Resumen</h1>";
                    echo "<form action=\"index.php\" method=\"POST\">";
                    $actual = $partidasAcabadas->iterate();
                    while($actual) {
                        $numeroPartida = $partidasAcabadas->getCurrent()->getId_partida();
                        echo "<input type=\"checkbox\" name=\"resumen['$numeroPartida']\" value=\"$numeroPartida\">Informe de partida ".$numeroPartida."</input></br>";
                       
                        $actual = $partidasAcabadas->iterate();
                    }
                    echo "</br><input type=\"submit\" name=\"informePartida\" value=\"Resumen Partidas\"/>";
                    echo "</form>";
                }
                ?>
                    <form action="../index.php" method="POST">
                        <input type="submit" name="nuevaPartida" value="Nueva Partida">
                    </form>
                    <form action="../index.php" method="POST">
                        <input type="submit" name="cierraSesion" value="Cerrar Sesion">
                    </form>
                <main>
        </body>
    </html>
<?php
    }
?>


