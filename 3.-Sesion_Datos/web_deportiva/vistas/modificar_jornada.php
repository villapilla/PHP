<?php
if($vista !== "modificar_jornada") {
    header('Location: /');
} else {
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/login.css">
        <meta charset="UTF-8">
        <title>Modificar Jornada</title>
    </head>
    <body>
        <main id="login">
        <?php
       
            $partidos = $jornada->getPartidos();
            $id_jornada = $jornada->getId_Jornada();
            $actual = $partidos->iterate();
            echo "<h1>Inserte o Modifique los datos</h1>";
            echo "<form  action=\"index.php\" method=\"POST\">";
            while($actual) {
                $partido = $partidos->getCurrent();
                $id_partido = $partido->getId_partido();
                echo "<label class=\"insert\">".$partido->getEqLocal()->getNombre()."</label>";
                echo "<input type=\"text\" class=\"insert\" name=\"resultado[". $id_jornada . "][" .$id_partido . "][eqLocal]\" required = \"required\" value = \"". $partido->getGolesLocal()   ."\"></input>";
                echo "<input type=\"text\" class=\"insert\" name=\"resultado[". $id_jornada . "][" .$id_partido . "][eqVisitante]\" required = \"required\" value = \"". $partido->getGolesVisitante() ."\"></input>";
                echo "<label class=\"insert\">".$partido->getEqVisitante()->getNombre()."</label>";
                $actual = $partidos->iterate();
            }
            echo "</br><input type=\"submit\" name=\"modJornada\" value=\"Modificar Jornada\"/>";
            echo "</form>"; 
           
       
        ?>
            <form  action="index.php" method="POST">
                <label>Direccion del fichero XML  folder/ :</label>
                <input type="text" name="direccion" required="required"/>
                <input type="submit" name="modificar_xml" value="Modificar por XML" />
            </form>
            <form action="index.php" method="POST">
                <input type="submit" name="volver" value="Salir"/>
            </form>
            
        </main>
    </body>
</html>







<?php
}
