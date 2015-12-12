<?php
if(!isset($vistas) && $vistas !== "xml") {
    header('/');
} else {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inventario de libros</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/libros.css">
    </head>
    <body>
        <main>
            <h1>Partidas en formato XML</h1>
<?php
$libros = $user->getLibros();

$note =<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<coleccion>
</coleccion>
XML;

$xml = new SimpleXMLElement($note);
$actual = $libros->iterate();
while($actual) {
    $libro = $xml->addChild("libro");
    $libro->addChild("titulo", $actual->getTitulo());
    $libro->addChild("editorial", $actual->getEditorial());        
    $libro->addChild("escritor", $actual->getEscritor());  
    $libro->addChild("anio_publicacion", $actual->getPublicacion());
    $libro->addChild("paginas", $actual->getPaginas());
    $actual = $libros->iterate();
}

echo "<div id=\"xml\">";
    echo htmlspecialchars($xml->asXML());
echo "</div>";
?>
<form action="index.php" method="POST">
                <input class="boton" type="submit" name="menu" value="Atras">
            </form>
            <form action="index.php" method="POST">
                <input type="submit" class="boton" name="cerrarSesion" value="Cerrar Sesión">
            </form>
        </main>
    </body>
</html>
<?php
}
?>