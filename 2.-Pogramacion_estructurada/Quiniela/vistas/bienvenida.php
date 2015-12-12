<!DOCTYPE html>
<html>
    <head>
        <title>Quiniela</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body onload="document.getElementById('boton').focus()">
        <h1>Introduzca sus resultados</h1><br>
        <div class="bonito">
            
            <form action="../procesaquiniela.php" method="POST">
                    <table>
                        <?php
                            include "vistas/tabla.php";
                        ?>
                    </table><br>
                    <input type="SUBMIT" name="botonenvio" value="Enviar" id="boton">
            </form>
        </div>
    </body>
</html>