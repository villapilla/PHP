<!DOCTYPE html> 
<html>
        <head>
            <meta charset="UTF-8"/>
            <title>Juego del ahorcado</title>
            <link rel="stylesheet" href="css/login.css"/>
        </head>
        <body>
             <main id="login">
                <h1>Resumen de  las partidas</h1>
                <div id="xml">
                    <?php
                    $resumen = new XMLWriter();
                    $resumen->openMemory();
                    $resumen->startDocument("1.0");
                    $resumen->startElement("ahorcado");
                    foreach ($partidasResumen as $numPartida => $jugadas) {
                        $resumen->startElement("partida");
                        $resumen->writeAttribute("id_partida",$numPartida);
                        $actual = $jugadas->iterate();
                         while($actual) {
                            $resumen->startElement("jugada");
                            $resumen->writeAttribute("numero", $jugadas->getCurrent()->getId_jugada());
                            $resumen->writeElement("letra", $jugadas->getCurrent()->getLetra());
                            $resumen->writeElement("palabra_decubierta", $jugadas->getCurrent()->getPalabraDescubierta());
                            $resumen->endElement();
                            $actual = $jugadas->iterate();
                        }
                        $resumen->endElement();
                    }
                    $resumen->endElement();
                    $resumen->endDocument();
                    $xml = ($resumen->outputMemory());
                    $archivo = fopen("folder/XmlPartida.xml", "w+");
                    fwrite($archivo, $xml);
                    echo htmlentities($xml);
                    ?>
                </div>
                <a href="../folder/XmlPartida.xml">Descargar el archvo XML</a>
                <form action="../index.php" method="POST">
                    <input type="submit" name="partidas" value="Atras"/>
                </form>
             </main>
        </body>
</html>
