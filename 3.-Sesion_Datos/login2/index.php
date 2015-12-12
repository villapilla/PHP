<?php 
require_once 'class/Conexion.php';

session_start();

/* Conectar a una base de datos ODBC invocando al controlador */
$dsn = 'mysql:host=localhost;dbname=login';
$usuario = 'login';
$contraseña = 'login';

$gbd = new Conexion($dsn, $usuario, $contraseña);

if(isset($_POST["formRegistro"])) {
   $newUser = $_POST["insert"];
   $select = 'SELECT pass FROM login WHERE user = :user';
    //Sacar los valores del query con un foreach
   $consulta = $gbd->prepare($select);
   $consulta->execute(array(":user" => $newUser["user"]));
   $clave = $consulta->fetch(PDO::FETCH_ASSOC);
   if(!$clave) {
        $insert = "Insert into login (user,pass,email,pintor) values (:user, :pass, :email, :pintor)";
        $insercion = $gbd->prepare($insert);
        $insercion->execute(array(":user" => $newUser["user"], ":pass" => $newUser["pass"],":email" => $newUser["email"], ":pintor" => $newUser["pintores"]));
    } else {
         $view = "login";
         $_SESSION["errorInsert"] = true;
    }
}



//Primera vez que entra?
if(!isset($_SESSION["credenciales"])) {
    //Ha enviado el formulario?
    if(isset($_POST["botonenvio"])) {
        $pass = $_POST["password"];
        $user = $_POST["user"];
        $select = 'SELECT pass, pintor FROM login WHERE user = :user';
        //Sacar los valores del query con un foreach
        $consulta = $gbd->prepare($select);
        $consulta->execute(array(":user" => $user));
        $clave = $consulta->fetch(PDO::FETCH_ASSOC);
        //$clave = $query->fetch(PDO::FETCH_ASSOC)["pass"];
        //Son correctos los datos enviados?
        if($clave["pass"] === $pass) {
            $_SESSION["credenciales"] = ["user" => $user, "pass" => $pass, "pintores" => $clave["pintor"]];
            $view = "aplicacion";
            include 'vistas/aplicacion.php';
        } else {
            $view = "login";
            $_SESSION["error"] = true;
            include 'vistas/login.php';
        } 
    } else {
        $view = "login";
        include 'vistas/login.php';
    }
} else {
    //EL usuario a solicitado el cierre de sesión
    if(isset($_POST["cierra"])) {
        session_unset();
        $view = "login";
        include 'vistas/login.php';
    } else {
        $view = "aplicacion";
        include 'vistas/aplicacion.php';
    }
}
    

