<?php
if(!isset($vistas) && $vistas !== "registro") {
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
            <h1>Introduce usuario y password</h1>
            <form action="index.php" method="POST">
                <label>Usuario: </label>
                <input type="text" name="user">
                <label>Password: </label>
                <input type="text" name="pass">
                <input type="submit" class ="boton" name="registro" value="Registrar Usuario">
            </form>
        </main>
    </body>
</html>
<?php
}
?>
