<?php

require_once 'class/Partida.php';
require_once 'class/Usuario.php';

session_start();


if(!isset($_SESSION["usuario"])) {
    if(empty($_POST)) {
        $view = "login";
        include 'vistas/login.php';
    } else {
        if(isset($_POST["botonlogin"])) {
            $User = Usuario::getUsuario($_POST["user"], $_POST["password"]);
            if(!$User) {
                $_SESSION["errorLogin"] = true;
                $view = "login";
                include 'vistas/login.php';
            } else {
                $_SESSION["usuario"] = $User;
                if($User->getAdmin() === "true") {
                   $view = "registro";
                   include 'vistas/registro.php'; 
                } else {
                        $partidasAcabadas = Partida::getPartidasAcabadas($User->getId_user());
                        $partidasIniciadas = Partida::getPartidasIniciadas($User->getId_user());
                        $view = "partidasInacabadas";
                        include 'vistas/partidasInacabadas.php';
                }
            } 
        } else {
            $view = "login";
            include 'vistas/login.php';
        }
    }   
} else {
    $User = $_SESSION["usuario"];
    if($User->getAdmin() === "true") {
         if(isset($_POST["cierraSesion"])) {
             session_unset();
            $view = "login";
            include 'vistas/login.php';
         } else {
            if(isset($_POST["formRegistro"])) {
                 if($User->persist($_POST["user"], $_POST["pass"])) {
                    $errorInsert = false;
                    $view = "registro";
                    include 'vistas/registro.php';
                } else {
                    $errorInsert = true;
                    $view = "registro";
                    include 'vistas/registro.php';
                }
            }
        }
    } else {
        if(isset($_POST["informePartida"])) {
            $partidas = $_POST["resumen"];
            $partidaResumen = [];
            foreach ($partidas as $key => $id_partida) {
                $partidasResumen[$key] = Jugada::getJugadas($id_partida);
            }
            $wiew = "resumen";
            include 'vistas/resumen.php';
        } else {
            if(isset($_POST["partidas"])) {
                $partidasAcabadas = Partida::getPartidasAcabadas($User->getId_user());
                $partidasIniciadas = Partida::getPartidasIniciadas($User->getId_user());
                $view = "partidasInacabadas";
                include 'vistas/partidasInacabadas.php';
            } else {
                if(isset($_POST["terminarPartida"])) {
                $User->getPartida()->add($_SESSION["partida"]);
                unset($_SESSION["partida"]);
                $partidasAcabadas = Partida::getPartidasAcabadas($User->getId_user());
                $partidasIniciadas = Partida::getPartidasIniciadas($User->getId_user());
                $view = "partidasInacabadas";
                include 'vistas/partidasInacabadas.php';
                } else {
                    if(isset($_POST["cierraSesion"])) {
                        if(isset($_SESSION["partida"])) {
                        $partida = $_SESSION["partida"];
                        $partida->persist();
                        }
                    session_unset();
                    $view = "login";
                    include 'vistas/login.php';
                    } else {
                        if(isset($_POST["nuevaPartida"])) {
                            $partida = new Partida($User->getId_user());
                            $partida->persist();
                            $_SESSION["partida"] = $partida;
                            $view = "tablero";
                            include 'vistas/tablero.php';
                        } else {
                            if(isset($_POST["recuperarPartida"])) {
                               $id_partida = $_POST["partidaRec"];
                               $partida = $User->getPartida()->getByProperty("id_partida", $id_partida);
                               $_SESSION["partida"] = $partida;
                               $view = "tablero";
                               include 'vistas/tablero.php';
                           } else {
                               if(isset($_SESSION["partida"])) {
                                   $partida = $_SESSION["partida"];
                                   if(!isset($_POST["jugada"])) {
                                      $view = "tablero";
                                      include 'vistas/tablero.php';
                                   } else {
                                       $letra = $_POST["letraUser"];
                                       $partida->comprobarPalabra($letra);
                                       $jugada = new Jugada($partida->getId_partida(), $letra, $partida->getPalabraDescubierta(), $partida->getIntentos());
                                       $jugada->persist();
                                       if($partida->checkVictoria()) {
                                           unset($_SESSION["partida"]);
                                           $partida->setFinalizada("yes");
                                           $partida->persist();
                                           $victoria = true;
                                           $view = "tablero";
                                           include 'vistas/tablero.php';
                                       } else {
                                           if($partida->getFallos() >= 7) {
                                               unset($_SESSION["partida"]);
                                               $partida->setFinalizada("yes");
                                               $partida->persist();
                                               $derrota = true;
                                               $view = "tablero";
                                               include 'vistas/tablero.php';
                                           } else {
                                               $view = "tablero";
                                               include 'vistas/tablero.php'; 
                                           }
                                       }
                                   }
                               } else {
                                    $partidasAcabadas = Partida::getPartidasAcabadas($User->getId_user());
                                    $partidasIniciadas = Partida::getPartidasIniciadas($User->getId_user());
                                    $view = "partidasInacabadas";
                                    include 'vistas/partidasInacabadas.php';
                               }
                            }
                         }
                     } 
                 }
             }
         }
     }
            
}