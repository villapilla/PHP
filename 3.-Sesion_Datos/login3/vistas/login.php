<!DOCTYPE html>
<?php 
    if ($view !== "login" ) {
        header("Location: localhost:8000");
    } else {
?>    
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
                } else {
                    if(isset($_SESSION["errorInsert"])) {
                        echo "<h1>Datos de Registro Invalidos</h1>";
                        session_unset();
                    }
                }
            ?>
            
            <h1>Introduce Usuario y password</h1>
           <form action="index.php" method="POST">
                <label for="numero">Introduce tu usuario:</label>
                <input type="text" name="user" required="required"/>
                <label for="numero">Introduce tu usuario:</label>
                <input type="text" name="password" required="required"/> 
                <input type="submit" name="botonlogin" value="Enviar"/>
            </form>
            <form class="segundo_boton" action="index.php" method="POST">              
                <input type="submit" name="petRegistro" value="Registro"/>
            </form>
            <main>
        </body>
    </html>
<?php
    }
?>
