<?php
    if ($view !== "aplicacion") {
        header("Location: localhost:8000");
    } else {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cuadros</title>
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <h1>Hola
        <?php
            echo $_SESSION["credenciales"]["user"];
        ?>
        </h1>
        <figure>
            <?php 
                echo "<img ";
                if($_SESSION["credenciales"]["pintores"] === "Dali") {
                   echo "src=\"img/dali.jpeg\">";
                } else {
                    if($_SESSION["credenciales"]["pintores"] === "Picasso") {
                        echo "src=\"img/picasso.jpg\">";
                    } else {
                        if($_SESSION["credenciales"]["pintores"] === "Gogh") {
                            echo "src=\"img/gogh.jpg\">";
                        }
                    }
                }
            ?>
        </figure>
        <form action="index.php" method="POST">
            <input type="submit" name="cierra" value="Cerrar Sesión"/>
        </form>
    </body>
</html>
<?php
    }
?>

