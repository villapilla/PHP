<?php
    if ($view !== "update") {
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
        <main id="login">
            <h1>Editar Perfil</h1>
            <form action="../index.php" method="POST">
                <label for="numero">Nombre de Usuario:</label>
                <input type="text" maxlength="10" name="user" required="required" value="<?php echo $User->getNombre()?>"/>
                <label for="numero">Introduce tu password:</label>
                <input type="text" maxlength="10" name="pass" required="required" value="<?php echo $User->getPass()?>"/>
                <label for="numero">Correo electrónico:</label>
                <input type="text" name="email" required="required" value="<?php echo $User->getEmail()?>"/>
                <label for="numero">Tu pintor favorito:</label>
                <select name="pintor">
                        <option value="3">Pablo Picasso</option>
                        <option value="1">Salvador Dali</option>
                        <option value="2">Vincent van Gogh</option>
                </select>  
                <input type="submit" name="updateSesion" value="Enviar"/>
            </form>
            <form class="segundo_boton" action="../index.php" method="POST">
                <input type="submit" name="deleteUser" value="Baja del sistema"/>
            </form>
        </main>
    </body>
</html>
<?php
    }