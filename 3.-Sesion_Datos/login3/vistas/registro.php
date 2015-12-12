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
                if(isset($_SESSION["error"])) {
                    echo "<h1>Datos Incorrectos</h1>";
                    session_unset();
                }
            ?>
            <main id="login">
                <h1>Formulario de registro</h1>
                <form action="../index.php" method="POST">
                    <label for="numero">Introduce tu usuario:</label>
                    <input type="text" maxlength="10" name="user" required="required"/>
                    <label for="numero">Introduce tu password:</label>
                    <input type="text" maxlength="10" name="pass" required="required"/>
                    <label for="numero">Introduce tu correo electrónico:</label>
                    <input type="text" name="email" required="required"/>
                    <label for="numero">Tu pintor favorito:</label>
                    <select name="pintor">
                        <option value="3">Pablo Picasso</option>
                        <option value="1">Salvador Dali</option>
                        <option value="2">Vincent van Gogh</option>
                    </select>
                    <input type="submit" name="formRegistro" value="Enviar"/>
                </form>
            </main>
        </body>
    </html>
<?php
}
