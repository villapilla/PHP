<h1>Enhorabuena has ganado</h1>
<h2>Despues de:
    <?php 
        echo $_SESSION["intentos"];
    ?> 
    intentos</h2>
<form action="index.php" method="POST">
    <input type="submit" name="fin" value="Volver a Jugar"/>
</form>

