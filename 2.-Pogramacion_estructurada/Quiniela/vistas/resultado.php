<!DOCTYPE html>
<html>
    <head>
        <title>Resultados de la quiniela</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body onload="document.getElementById('boton').focus()">
        <h1>N&uacute;mero aciertos:</h1><br>
        <div class="bonito">
            <form action="../index.php" method="POST">
                    <table>
                        <?php
                            include "tabla.php";
                        ?>
                    </table>
                <br><br>
                <input type="SUBMIT" value="Volver a jugar" id="boton">
            </form>
        </div>
    </body>
</html>