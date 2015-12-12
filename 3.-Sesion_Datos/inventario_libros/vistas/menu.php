<?php
if(!isset($vistas) && $vistas !== "menu") {
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
            <h1>Inventario de Libros</h1>
            <form action="index.php" method="POST">
                <table id="libros">
                    <tr>
                        <th></th>
                        <th>Título</th>
                        <th>Editorial</th>
                        <th>Escritor</th>
                        <th>Año de públicacion</th>
                        <th>Número de Páginas</th>
                    </tr>
                <?php
                    $libros = $user->getLibros();
                    $actual = $libros->iterate();
                        while($actual) {
                        echo "<tr><td>";
                        echo "<input type=\"checkbox\" name =\"libro[". $actual->getId_libro(). "]\" value=\"".$actual->getId_libro()."\">";
                        echo "</td><td>";
                        echo $actual->getTitulo();
                        echo "</td><td>";
                        echo $actual->getEditorial();
                        echo "</td><td>";
                        echo $actual->getEscritor();
                        echo "</td><td>";
                        echo $actual->getPublicacion();
                        echo "</td><td>";
                        echo $actual->getPaginas();
                        echo "</td></tr>";
                        $actual = $libros->iterate();            
                    }
                ?>
                    <table>    
                <input type="submit" class="boton" name="delete" value="Borrar Libro">
            </form>            
            <form action="index.php" method="POST">
                <input type="submit" class="boton" name="add" value="Añadir Libro">
            </form>
                
            <form action="index.php" method="POST">
                <input type="submit" class="boton" name="cerrarSesion" value="Cerrar Sesion">
            </form>
            <form action="index.php" method="POST">
                <input type="submit" class="boton" name="xml" value="Ver en XML">
            </form>
        </main>
    </body>
</html>
<?php
}
?>