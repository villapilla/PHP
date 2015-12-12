<!DOCTYPE html>
<html>
    <head>
        <title>Inventario de libros</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/libros.css">
    </head>
    <body>
        <main>
            <h1>Introduce usuario y password o Registrate</h1>
            <form action="index.php" method="POST">
                <label>Usuario: </label>
                <input type="text" name="user">
                <label>Password: </label>
                <input type="text" name="pass">
                <input type="submit" class ="boton" name="login" value="Iniciar Sesión">
            </form>
            <form action="index.php" method="POST">   
                <input type="submit" class ="boton" name="pet_registro" value="Registro de usuario">
            </form>
        </main>
    </body>
</html>
