<?php
if(!isset($vistas) && $vistas !== "addLibro") {
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
            <h1>Introduce los datos del Libro</h1>
            <?php
            if(isset($errorAdd)) {
                if($errorAdd == "false") {
                    echo "<h2>Añadido correctamente</h2>";
                } else {
                    echo "<h2>Error el añadir libro</h2>";
                }
            }
            ?>
            <form action="index.php" method="POST">
                <label>Titulo: </label>
                <input type="text" name="libro[titulo]" required="required"></br>
                <label>Editorial: </label>
                <input type="text" name="libro[editorial]" required="required"></br>
                <label>Escritor: </label>
                <input type="text" name="libro[escritor]" required="required"></br>
                <label>Año de publicación: </label>
                <input type="text" name="libro[publicacion]" required="required"></br>
                <label>Número de páginas: </label>
                <input type="text" name="libro[paginas]" required="required"></br>
                <input type="submit" class="boton" name="addLibro" value="Registrar Libro">
            </form>
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