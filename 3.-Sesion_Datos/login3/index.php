<?php 
require_once 'class/usuario.php';

session_start();


if(!isset($_SESSION["usuario"])) {
    if(empty($_POST)) {
        $view = "login";
        include 'vistas/login.php';
    } else {
        if(isset($_POST["botonlogin"])) {
            $User = Usuario::getUsuario($_POST["user"], $_POST["password"]);
            if($User) {
                $pintor = $User->getPintor()->generaCuadroAleatorio();
                $_SESSION["usuario"] = $User;
                $view = "aplicacion";
                include 'vistas/aplicacion.php';
            } else {
                $_SESSION["errorLogin"] = true;
                $view = "login";
                include 'vistas/login.php';
            } 
        } else {
            if(isset($_POST["petRegistro"])) {
                $view = "registro";
                include 'vistas/registro.php';
            } else {
                if(isset($_POST["formRegistro"])) {
                $User = new Usuario($_POST["user"], $_POST["pass"], $_POST["email"], $_POST["pintor"]);
                    if($User->persist()) {
                        $pintor = $User->getPintor()->generaCuadroAleatorio();
                        $_SESSION["usuario"] = $User;
                        $view = "aplicacion";
                        include 'vistas/aplicacion.php'; 
                    } else {
                        $_SESSION["errorInsert"] = true;
                        $view = "login";
                        include 'vistas/login.php';   
                    }
                } else {
                    $view = "login";
                    include 'vistas/login.php'; 
                }
            }
        }
    }
} else {
    $User = $_SESSION["usuario"];
    if(empty($_POST)) {
        $view = "aplicacion";
        include 'vistas/aplicacion.php';
    } else {
        if(isset($_POST["cierraSesion"])) {
            session_unset();
            $view = "login";
            include 'vistas/login.php';
        } else {
            if(isset($_POST["petUpdate"])) {
                $view = "update";
                include 'vistas/update.php';
            } else {
                if(isset($_POST["updateSesion"])) {
                    $changeUser = new Usuario($_POST["user"], $_POST["pass"], $_POST["email"], $_POST["pintor"]);
                    $changeUser->setId($User->getId());
                    if($changeUser->persist() !== null) {
                        $_SESSION["usuario"] = $changeUser;
                        $view = "aplicacion";
                        include 'vistas/aplicacion.php';
                    } else {
                        $errorUpdate = true;
                        $view = "aplicacion";
                        include 'vistas/aplicacion.php';
                    }
                } else {
                    if(isset($_POST["deleteUser"])) {
                        $User->delete();
                        session_unset();
                        $view = "login";
                        include 'vistas/login.php';
                    } else {
                        $User = $_SESSION["usuario"];
                        $view = "aplicacion";
                        include 'vistas/aplicacion.php';
                    }
                }
            }
        }
    }
    
}
    

