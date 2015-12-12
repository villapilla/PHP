<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="../css/login.css">
            <title>Login</title>
        </head>
        <body>
            <main id="login">
            <?php
                if(isset($_SESSION["errorLogin"])) {
                    echo "<h1>Datos Incorrectos</h1>";
                    session_unset();
                } 
            ?>
            
            <h1>Introduce Usuario y password</h1>
           <form action="index.php" method="POST">
                <label for="numero">Introduce tu usuario:</label>
                <input type="text" name="user" required="required"/>
                <label for="numero">Introduce tu password:</label>
                <input type="text" name="password" required="required"/> 
                <input type="submit" name="botonlogin" value="Enviar"/>
            </form>
            <main>
        </body>
    </html>
