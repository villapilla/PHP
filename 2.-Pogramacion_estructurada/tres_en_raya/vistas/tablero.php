<table id="tablero">
  <?php
  $imgJugador = "img/circulo.png";
  $imgMaquina = "img/equis.png";
  for($i = 0; $i < 3; $i++) {
      echo "<tr>";
      for($j = 0; $j < 3; $j++) {
          $pos = $i * 3 + $j;
          if(isset($jugadas[$pos])) {
              $valor = $jugadas[$pos];
              if($jugadas[$pos] === 1) {
                  echo "<td id=\"casilla$pos\">";
                  echo "<img src = \"$imgJugador\">";
                  echo "<input type = \"hidden\" name = jugadas[$pos] value = $valor>";
                  echo "</td>";
              } else {
                  if($jugadas[$pos] === 0)
                  $valor = $jugadas[$pos];
                  echo "<td id=\"casilla$pos\">";
                  echo "<img src = \"$imgMaquina\">";
                  echo "<input type = \"hidden\" name = jugadas[$pos] value = $valor>";
                  echo "</td>";
              }
          } else {
              echo "<td id=\"casilla$pos\" onclick = \"img(this)\"></td>";
          }
      }
      echo "</tr>";
  }
   ?>   
</table>


    

