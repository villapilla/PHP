<?php

require_once 'class/Usuario.php';
require_once 'class/Equipo.php';
require_once 'class/Jornada.php';
require_once 'class/Liga.php';
require_once 'class/Clasificacion.php';

session_start();

if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
    if (isset($_POST["cerrarSesion"])) {
        session_unset();
        session_destroy();
        include 'vistas/login.php';
    } else {
        if (isset($_SESSION["liga"])) {
            $liga = $_SESSION["liga"];
            if (empty($_POST)) {
                $vista = "menu";
                include 'vistas/menu.php';
            } else {
                if (isset($_POST["modificar"])) {
                    if (isset($_POST["jornada"])) {
                        $id_jornada = $_POST["jornada"];
                        $jornada = $liga->getJornadas()->getByProperty("id_jornada", $id_jornada);
                        $vista = "modificar_jornada";
                        include 'vistas/modificar_jornada.php';
                    } else {
                        $errorModificar = true;
                        $vista = "menu";
                        include 'vistas/menu.php';
                    }
                } else {
                    if (isset($_POST["modJornada"])) {
                        $resultadosJornada = $_POST["resultado"];
                        foreach ($resultadosJornada as $jornada => $partido) {
                            $jornada = $liga->getJornadas()->getByProperty("id_jornada", $jornada);
                            foreach ($partido as $id_partido => $equipo) {
                                $partidoActual = $jornada->getPartidos()->getByProperty("id_partido", $id_partido);
                                $partidoActual->setGolesLocal($equipo["eqLocal"]);
                                $partidoActual->setGolesVisitante($equipo["eqVisitante"]);
                                $partidoActual->persist();
                            }
                            $jornada->setEstado("true");
                            $jornada->persist();
                        }
                        $vista = "menu";
                        include 'vistas/menu.php';
                    } else {
                        if (isset($_POST["modificar_xml"])) {
                            $fichero = $_POST["direccion"];
                            $xml = new SimpleXMLElement("folder/".$fichero, null, true);
                            foreach ($xml->children() as $partidos) {
                                $jornada = $liga->getJornadas()->getByProperty("id_jornada", $xml->attributes()->id_jornada);
                                $partidoActual = $jornada->getPartidos()->getByProperty("id_partido", $partidos->attributes()->id_partido);
                                $partidoActual->setGolesLocal((string)($partidos->golesL));
                                $partidoActual->setGolesVisitante((string)($partidos->golesV));
                                $partidoActual->persist();
                            }
                            $jornada->setEstado("true");
                            $jornada->persist();
                            $vista = "menu";
                            include 'vistas/menu.php';
                        } else {
                            if (isset($_POST["borrar"])) {
                                if (isset($_POST["jornada"])) {
                                    $id_jornada = $_POST["jornada"];
                                    $jornada = $liga->getJornadas()->getByProperty("id_jornada", $id_jornada);
                                    $partidos = $jornada->getPartidos();
                                    $actual = $partidos->iterate();
                                    while ($actual) {
                                        $partido = $partidos->getCurrent();
                                        $partido->setGolesLocal(-1);
                                        $partido->setGolesVisitante(-1);
                                        $partido->persist();
                                        $actual = $partidos->iterate();
                                    }
                                    $jornada->setEstado("false");
                                    $jornada->persist();
                                } else {
                                    $errorModificar = true;
                                }
                                $vista = "menu";
                                include 'vistas/menu.php';
                            } else {
                                if (isset($_POST["clasificacion"])) {
                                    $clasificacion = Clasificacion::generateClasificacion($liga);
                                    $clasificacion->sortByProperty("nombre", "s");
                                    $clasificacion->sortByProperty("difG", "nr");
                                    $clasificacion->sortByProperty("puntos", "nr");
                                    $vista = "clasificacion";
                                    include 'vistas/clasificacion.php';
                                } else {
                                    if (isset($_POST["menu"])) {
                                        $vista = "menu";
                                        include 'vistas/menu.php';
                                    } else {
                                        $vista = "menu";
                                        include 'vistas/menu.php';
                                    }
                                }
                            }
                        }
                    }
                }
            }
        } else {
            if (isset($_POST["generarLiga"])) {
                $liga = new Liga($_POST["nombre"]);
                $liga->persist();
                $user->setId_Liga($liga->getId_liga());
                $user->persist();
                $equipos = $_POST["equipo"];
                $liga->setJornadas($liga->generaLiga($equipos));
                $_SESSION["liga"] = $liga;
                $vista = "menu";
                include 'vistas/menu.php';
            } else {
                $vista = "generar_liga";
                include 'vistas/generar_liga.php';
            }
        }
    }
} else {
    if (isset($_POST["botonlogin"])) {
        $user = Usuario::getUsuario($_POST["user"], $_POST["password"]);
        if ($user) {
            $_SESSION["user"] = $user;
            if ($user->getId_Liga()) {
                $liga = Liga::getLiga($user->getId_Liga());
                $_SESSION["liga"] = $liga;
                $vista = "menu";
                include 'vistas/menu.php';
            } else {
                $vista = "generar_liga";
                include 'vistas/generar_liga.php';
            }
        } else {
            $errorLogin = true;
            include 'vistas/login.php';
        }
    } else {
        include 'vistas/login.php';
    }
}