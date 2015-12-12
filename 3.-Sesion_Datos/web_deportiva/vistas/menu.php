<?php
require_once 'class/Collection.php';

if($vista !== "menu") {
    header('Location: /');
} else {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/login.css">
        <title>Jornadas</title>
    </head>
    <body>
        <main id="login">
        <?php
            $jornadas = $liga->getJornadas();
            $actual = $jornadas->iterate();
            echo "<h1>Elige una Jornada a Modificar/Borrar</h1>";
            if(isset($errorModificar)) {
                echo "<h2>Debes elegir una jornada</h1>";
            }
            echo "<form action=\"index.php\" method=\"POST\">";
            while($actual) {
                $numeroJornada = $actual->getId_Jornada();
                $check = $actual->getEstado();
                $fecha = $actual->getFecha();
                $fecha = date("d-m-Y", strtotime($fecha));
                echo "<input type=\"radio\" name=\"jornada\" value=\"".$numeroJornada."\"/>Jornada del ".$fecha."</input>";
                if ($check === "true") {
                    echo "<img src=\"img/check.png\">";
                }
                echo "</br>";
                $actual = $jornadas->iterate();
            }
            echo "</br><input type=\"submit\" name=\"modificar\" value=\"Modificar Jornada\"/>";
            echo "</br><input type=\"submit\" name=\"borrar\" value=\"Borrar Jornada\"/>";
            echo "</form>";
        ?>
            <form action="../index.php" method="POST">
                <input type="submit" name="clasificacion" value="Clasificación actual"/>
            </form>
            <form action="../index.php" method="POST">
                <input type="submit" name="cerrarSesion" value="Cerrar Sesión"/>
            </form>
        </main>
    </body>
</html>






<?php
}


