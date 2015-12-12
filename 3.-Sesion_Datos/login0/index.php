<?php 

session_start();

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
        $credenciales = $_SESSION["credenciales"];
        //Son correctos los datos enviados?
        if(($credenciales["user"] === "dav") && ($credenciales["pass"] === "dav")) {
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
   $credenciales = $_SESSION["credenciales"];
   //Credenciales correctas?
    if(($credenciales["user"] === "dav") && ($credenciales["pass"] === "dav")) {
        $_SESSION["view"] = "aplicacion.php";
        include 'vistas/aplicacion.php';
    } else {
        $_SESSION["view"] = "index.php";
        $_SESSION["error"] = true;
        include 'vistas/login.php';
    }
} 
    

