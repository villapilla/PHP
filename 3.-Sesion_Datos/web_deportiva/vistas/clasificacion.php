<?php
if($vista !== "clasificacion") {
    header('Location: /');
} else {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/login.css">
        <title>Clasificacion</title>
    </head>
    <body>
        <main id="login">
            <h1>Clasificacion Actual</h1>
            <table>
                <tr>
                    <th>Puntos</th>
                    <th>Nombre</th>
                    <th>GolesF</th>
                    <th>GolesC</th>
                    <th>Diff Goles</th>
                </tr>
        <?php
            $equipo = $clasificacion->iterate();
            while($equipo) {
                echo "<tr><td>";
                echo $equipo->getPuntos() . "</td><td class = \"nombre\">";
                echo $equipo->getNombre() . "</td><td>";
                echo $equipo->getGolesF() . "</td><td>";
                echo $equipo->getGolesC() . "</td><td>";
                echo $equipo->getDifG() . "</td></tr>";
                $equipo = $clasificacion->iterate();
            }
        ?>
            </table>
            <form action="../index.php" method="POST">
                <input type="submit" name="menu" value="Volver"/>
            </form>
        <?php
$note = <<<XML
<?xml version='1.0' standalone='yes'?>
<clasificacion>
</clasificacion>
XML;
$xml = new SimpleXMLElement($note);
$equipo = $clasificacion->iterate();
while($equipo) {
    $team = $xml->addChild('equipo');
    $team->addChild("puntos", $equipo->getPuntos());
    $team->addChild("nombre", $equipo->getNombre());
    $team->addChild("goles_favor", $equipo->getGolesF());
    $team->addChild("goles_contra", $equipo->getGolesC());
    $team->addChild("dif_goles", $equipo->getDifG());
    $equipo = $clasificacion->iterate();
}      
$fichero =  $xml->asXML();
$archivo = fopen("folder/clasificacion.xml", "w+");
fwrite($archivo, $fichero);

?>
           <form action="vistas/descarga.php" method="POST">
                <input type="submit" name="menu" value="DescargaXml"/>
            </form>
        </main>
    </body>
</html>







<?php
}
