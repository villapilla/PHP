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
        <main id="aplicacion">
            <?php
                if(isset($errorUpdate)) {
                    echo "<h1>El nombre de usuario ya existe</h1>";
                }
                echo "<h1>Hola".$User->getNombre();
            ?>
            </h1>

                <figure>
                    <?php 
                        $cuadro = $User->getPintor()->generaCuadroAleatorio()->getTitulo();
                        echo "<img src=\"img/".$cuadro.".jpg\"/>";
                    ?>
                </figure>
                <form action="../index.php" method="POST">
                    <input type="submit" name="cierraSesion" value="Cerrar Sesión"/>
                </form>
                <form action="../index.php" method="POST">
                    <input class="segundo_boton" type="submit" name="petUpdate" value="Cambiar Perfil"/>
                </form>
        </main>
    </body>
</html>
<?php
    }
?>

