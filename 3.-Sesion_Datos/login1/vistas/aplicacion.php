<?php
    if ($_SESSION["view"] !== "aplicacion.php") {
        header("Location: localhost:8000");
    } else {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>HOLA 
        <?php
            echo $_SESSION["credenciales"]["user"];
        ?>
        </h1>
        <form action="index.php" method="POST">
            <input type="submit" name="cierra" value="Cerrar Sesión"/>
        </form>
    </body>
</html>
<?php
    }
?>

