<?php
if($vista !== "generar_liga") {
    header('Location: /');
} else {
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="../css/login.css">
            <script src="../js/main.js"></script>
            <title>Login</title>
        </head>
        <body>
            <main id="login">
            
            <h1>Introduce Usuario y password</h1>
            <select id="menu">
                <?php
                    for($i=0; $i<=20 ;$i +=2) {
                        echo "<option value=\"$i\">".$i."</option>"; 
                    }
                ?>
            </select>
           <form action="index.php" method="POST">
                <label for="numero">Nombre de la liga:</label>
                <input type="text" name="nombre" required="required"/>
                <div id="input"></div>
                <input type="submit" name="generarLiga" value="Generar liga"/>
            </form>
            <form action="index.php" method="POST">
                <input type="submit" name="cerrarSesion" value="Cerrar Sesion"/>
            </form>
            <main>
        </body>
    </html>
<?php
}
