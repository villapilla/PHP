<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/boleto.css"/>
        <title>Loteria Primitiva</title>
    </head>
    <body>
        <div id="contenedor">
            <h1>Realice sus apuestas</h1>
            <form action="procesaApuestas.php" method="Post">
            <?php
            //Generamos la combinacion ganadora
            function apuestaGanadora() {
                $apuestas = 0;
                $salida = [];
                do {
                    $aleatorio = rand(1, 49);
                    if(in_array($aleatorio, $salida)) {
                        $apuestas--;
                    } else {
                        $salida[$apuestas] = $aleatorio;
                    }
                    $apuestas++;
                } while($apuestas < 6);
                return $salida;
            }
            //Pasa los números a caracteres ASCII
            function pasarAscii($num) {
               return chr(($num+65));
            }

            //Imprimimos el titulo de los boletos y generamos un array de boleto ganador
            $ganadora = apuestaGanadora();
            echo "<h2>Codigo de apuesta: ";
            foreach($ganadora as $key => $agraciados) {
                echo "<input type='hidden' name=ganadora[$key] value=\"$agraciados\"/>";
                echo pasarAscii($agraciados);
            }
            echo "</h2>";
            //Generamos las apuestas
            for($i = 0; $i < 4; $i++) {
                echo "<table>";
                echo "<tr>";
                echo "<td rowspan=\"5\">Boleto".($i+1)."</td>";
                for($j = 1; $j < 50; $j++) {
                    echo "<td><input type=\"checkbox\" name=\"posicion[$i][$j]\" value = \"check\">$j</input></td>";
                    if($j%10 === 0) {
                        echo "</tr><tr>";
                    }
                    if($j == 49){
                        echo "</tr></table>";
                    }
                }
            }

            ?>
                <input type="submit" name="botonenvio"/>
            </form>
        </div>
    </body>
</html>
