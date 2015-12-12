<?php
    if(!isset($aciertos)) {
        for($i = 0; $i < count($partidos); $i++) {
            echo "<tr>";
            for($j = 0; $j < 2; $j++) {
                echo "<input type=hidden name=equipos[$i][$j] value=" . $partidos[$i][$j] . ">";
                echo "<td name=\"partido[$i]\">" . $partidos[$i][$j] . "</td>";
            }
            echo "<td><select name=\"res[$i]\">"
                . "<option name=\"1\">1</option>"
                . "<option name=\"X\">X</option>"
                . "<option name=\"2\">2</option>"
                . "</select></td>";

            echo "</tr>";
        }
    } else {
        echo "<th colspan=3><h2>Su apuesta</h2><th>";
        for($i = 0; $i < count($equipos); $i++) {
            echo "<tr>";
            for($j = 0; $j < 2; $j++) {
                echo "<td>" . $equipos[$i][$j] . "</td>";
            }
            echo "<td><input type=text class=\"corto\" value=$resultados[$i] readonly></td>";
            echo "</tr>";
        }
        echo "</table><table>";
        echo "<th colspan=3><h2>Apuesta ganadora</h2><th>";
        for($i = 0; $i < count($equipos); $i++) {
            echo "<tr>";
                for($j = 0; $j < 2; $j++) {
                    echo "<td>" . $equipos[$i][$j] . "</td>";
                }
            if($resultadosReales[$i] === $resultados[$i]) {
                echo "<td><input type=text class=\"corto verde\" value=\"$resultadosReales[$i]\" readonly=readonly></td>";
            } else {
                echo "<td><input type=text class=\"corto rojo\" value=\"$resultadosReales[$i]\" readonly=readonly></td>";
            }
            
        }
        echo "<br><br><br><h1>Ha acertado " . $aciertos;
        echo $aciertos > 1 || $aciertos === 0 ? " veces" : " vez";
        echo $aciertos === 4 ? "<h1 class=\"pleno\">PLENO!</h1>" : "";
        echo "<br>";
    }
?>