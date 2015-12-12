<?php
  if ($view !== "registro") {
        header("Location: localhost:8000");
    } else {
?>
<!DOCTYPE html> 
<html>
        <head>
            <meta charset="UTF-8">
            <title>Registro</title>
            <link rel="stylesheet" href="css/login.css">
        </head>
        <body>
            <?php
            if(isset($errorInsert)) {
                if(($errorInsert === true)) {
                    echo "<h1>Nombre de usuario en uso</h1>";
                } else {
                    echo "<h1>Usuario introducido correctamente</h1>";
                }
            }
            ?>
            <main id="login">
                <h1>Formulario de registro</h1>
                <form action="../index.php" method="POST">
                    <label for="numero">Introduce usuario:</label>
                    <input type="text" maxlength="10" name="user" required="required"/>
                    <label for="numero">Introduce password:</label>
                    <input type="text" maxlength="10" name="pass" required="required"/>
                    <input type="submit" name="formRegistro" value="Enviar"/>
                </form>
                <form action="../index.php" method="POST">
                    <input class="segundo_boton" type="submit" name="cierraSesion" value="Cerrar Sesión"/>
                </form>
            </main>
        </body>
    </html>
<?php
}
