<!DOCTYPE html> 
<html>
        <head>
            <meta charset="UTF-8">
            <title>Registro</title>
        </head>
        <body>
            <?php
                if(isset($_SESSION["error"])) {
                    echo "<h1>Datos Incorrectos</h1>";
                    session_unset();
                }
            ?>
            <h1>Formulario de registro</h1>
           <form action="../index.php" method="POST">
                <label for="numero">Introduce tu usuario:</label>
                <input type="text" maxlength="10" name="insert[user]" required="required"/>
                <label for="numero">Introduce tu password:</label>
                <input type="text" maxlength="10" name="insert[pass]" required="required"/>
                <label for="numero">Introduce tu correo electrónico:</label>
                <input type="text" name="insert[email]" required="required"/>
                <label for="numero">Tu pintor favorito:</label>
                <select name="insert[pintores]">
                    <option value="Picasso">Pablo Picasso</option>
                    <option value="Dali">Salvador Dali</option>
                    <option value="Gogh">Vincent van Gogh</option>
                </select>
                <input type="submit" name="formRegistro" value="Enviar"/>
            </form>
        </body>
    </html>
