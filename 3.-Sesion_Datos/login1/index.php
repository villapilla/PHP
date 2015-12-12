<?php 

session_start();

/* Conectar a una base de datos ODBC invocando al controlador */
$dsn = 'mysql:host=localhost;dbname=login';
$usuario = 'login';
$contraseña = 'login';
try {
    $gbd = new PDO($dsn, $usuario, $contraseña);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}

//EL usuario a solicitado el cierre de sesión
if(isset($_POST["cierra"])) {
    session_unset();
}
//Primera vez que entra?
if(!isset($_SESSION["credenciales"])) {
    //Ha enviado el formulario?
    if(isset($_POST["botonenvio"])) {
        $pass = $_POST["password"];
        $user = $_POST["user"];
        $_SESSION["credenciales"] = ["user" => $user, "pass" => $pass];
        $select = "SELECT pass FROM login WHERE user = \"".$user."\"";
        //Sacar los valores del query con un foreach
        foreach ($gbd->query($select) as $row) {
            $clave = $row['pass'];
        }
        //Son correctos los datos enviados?
        if($clave === $pass) {
            $_SESSION["view"] = "aplicacion.php";
            include 'vistas/aplicacion.php';
        } else {
            $_SESSION["view"] = "index.php";
            $_SESSION["error"] = true;
            include 'vistas/login.php';
        } 
    } else {
        $_SESSION["view"] = "index.php";
        include 'vistas/login.php';
    }
} else {
    $select = "SELECT pass FROM login WHERE user = \"".$_SESSION["credenciales"]["user"]."\"";
    //Sacar los datos de la query con Fetch
    $query = $gbd->query($select);
    $clave = $query->fetch(PDO::FETCH_ASSOC)["pass"];
    //Credenciales correctas?
    if($clave === $_SESSION["credenciales"]["pass"]) {
        $_SESSION["view"] = "aplicacion.php";
        include 'vistas/aplicacion.php';
    } else {
        $_SESSION["view"] = "index.php";
        $_SESSION["error"] = true;
        include 'vistas/login.php';
    }
} 
    

