<!DOCTYPE html>
<?php 
    if ($_SESSION["view"] !== "index.php" ) {
        header("Location: localhost:8000");
    } else {
?>    
    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
        <body>
            <?php
                if(isset($_SESSION["error"])) {
                    echo "<h1>Datos Incorrectos</h1>";
                    session_unset();
                }
            ?>
            <h1>Introduce Usuario y password</h1>
           <form action="index.php" method="POST">
                <label for="numero">Introduce tu usuario:</label>
                <input type="text" name="user" required="required"/>
                <label for="numero">Introduce tu usuario:</label>
                <input type="text" name="password" required="required"/> 
                <input type="submit" name="botonenvio" value="Enviar"/>
            </form>
        </body>
    </html>
<?php
    }
?>
