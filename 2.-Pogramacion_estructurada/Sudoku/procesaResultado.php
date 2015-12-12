<!DOCTYPE html>
<?php
$suduku = $_POST['casilla'];
$tabla[0] = [9,7,6,2,4,3,8,5,1];
$tabla[1] = [3,2,8,1,6,5,7,4,9];
$tabla[2] = [5,1,4,8,7,9,3,6,2];
$tabla[3] = [6,4,2,7,3,8,1,9,5];
$tabla[4] = [7,5,9,6,1,2,4,3,8];
$tabla[5] = [1,8,3,9,5,4,6,2,7];
$tabla[6] = [8,6,5,4,9,1,2,7,3];
$tabla[7] = [4,9,1,3,2,7,5,8,6];
$tabla[8] = [2,3,7,5,8,6,9,1,4];
$user = 0;
$bien = 0;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Suduku</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <h1>Resultados</h1>
        <form action="index.php" method="POST">
<?php            
echo "<table id=\"tablero\">";
foreach ($tabla as $filas => $arrayCol) {
    echo "<tr>";
    foreach ($arrayCol as $columna => $casillas) {
           if(!isset($suduku[$filas][$columna])) {
               echo "<td>";
               echo "$casillas";
               echo "</td>";
           } else {
               $valor = $suduku[$filas][$columna];
               if($valor !== "") {
                   $user++;
               }
               if("$casillas" === $valor) {
                   echo "<td style=\"color: green\">";
                   echo "$valor";
                   echo "</td>";
                  $bien++;
               } else {
                   echo "<td style=\"color: red\">";
                   echo "$valor";
                   echo "</td>";
               }
           }
           
    }
    echo "</tr>";
}
echo "</table>";
$mal = $user - $bien;
echo "<h2>Números escritos por el usuario: $user";
echo "<h2>Números correctos: $bien";
echo "<h2>Números fallados: $mal";
?>
 <input class = "submit" type="submit" value="Volver" name="botonenvio">
        </form> 
    </body>
</html>