<?php
require_once 'class/Usuario.php';
require_once 'class/Libro.php';

session_start();

if(isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
    if(empty($_POST)) {
        $vistas = "menu";
        include 'vistas/menu.php';
    } else {
        if(isset($_POST["add"])) {
            $vistas = "addLibro";
            include 'vistas/addLibro.php';
        } else {
            if(isset($_POST["addLibro"])) {
                $datos = $_POST["libro"];
                $libro = new Libro($datos["titulo"], $datos["editorial"], $datos["escritor"], $datos["publicacion"], $datos["paginas"], $user->getId_usuario());
                if($libro->persist()) {
                    $errorAdd = "false";
                    $user->getLibros()->add($libro);
                } else {
                    $errorAdd = "true";
                }
                $vistas = "addLibro";
                include 'vistas/addLibro.php';
            } else {
                if(isset($_POST["delete"])) {
                    if(!isset($_POST["libro"])) {
                        $errorDelete = "true";
                        $vistas = "menu";
                        include 'vistas/menu.php';
                    } else {
                        $libros = $user->getLibros();
                        $datos = $_POST["libro"];
                        foreach ($datos as $id_libro) {
                            $libroDel = $libros->getByProperty("id_libro", $id_libro);
                            $libros->removeByProperty("id_libro", $id_libro);
                            $libroDel->delete();
                        }
                        $vistas = "menu";
                        include 'vistas/menu.php';
                    }
                } else {
                    if(isset($_POST["xml"])) {
                        $vistas = "xml";
                        include 'vistas/xml.php';
                    } else {
                        if(isset($_POST["cerrarSesion"])) {
                            unset($_SESSION["user"]);
                            include 'vistas/login.php';
                        } else {
                            if(isset($_POST["menu"])) {
                                $vistas = "menu";
                                include 'vistas/menu.php';
                            } else {
                                $vistas = "menu";
                                include 'vistas/menu.php';
                            }
                        }
                    }
                }
            }
        }
    }
} else {
    if(isset($_POST["pet_registro"])) {
        $vistas = "registro";
        include 'vistas/registro.php';
    } else {
        if(isset($_POST["registro"])) {
            $nombre = $_POST["user"];
            $pass = $_POST["pass"];
            $user = new Usuario($nombre, $pass);
            if($user->persist()) {
                $_SESSION["user"] = $user;
                $vistas = "menu";
                include 'vistas/menu.php';
            } else {
                $errorReg = "true";
                include 'vistas/login.php';
            }
        } else {
            if(isset($_POST["login"])) {
                $user = Usuario::getUser($_POST["user"], $_POST["pass"]);
                $_SESSION["user"] = $user;
                if($user) {
                    $vistas = "menu";
                    include 'vistas/menu.php';
                } else {
                    include 'vistas/login.php';
                }
            } else {
                include 'vistas/login.php';
            }
            
        }
    }
}
?>
