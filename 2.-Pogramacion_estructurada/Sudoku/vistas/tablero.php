<?php
$cuadrantesFila = 0;
$cuadranteCol = 0;
for($i=0; $i < 3; $i++) {
    echo "<tr>";
    for($j=0; $j < 3; $j++) {
        $veces = rand(3, 6);
        do {
            $fila = rand(0,2);
            $col = rand(0,2);
            $col = $col +(3 * $j);
            $fila = $fila + (3* $i);
            if($tabla[$fila][$col] = "") {
                $veces++;
            } else {
                $tabla[$fila][$col] = "";
            }
            $veces--;
        }while($veces !== 0);
    }
}

echo "<table id=\"tablero\">";
for($i=0; $i < 9; $i++) {
    echo "<tr>";
    for($j=0; $j < 9; $j++) {
        $random = $tabla[$i][$j];
        if($tabla[$i][$j] === "") {
            echo "<td>";
            echo "<input type=\"text\" name = \"casilla[$i][$j]\" value = \"$random\" maxlength = \"1\">";
            echo "</td>"; 
        } else {
            echo "<td>";
            echo "$random";
            echo "</td>"; 
        }
       
    }
   echo "</tr>";
}
echo "</table>";


