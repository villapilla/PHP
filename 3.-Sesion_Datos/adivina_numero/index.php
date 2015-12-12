<?php
    session_start();
    if(!isset($_SESSION["random"])) {
        $_SESSION["random"] = "".rand(1,10);
        $_SESSION["intentos"] = 0;
    } else {
        $_SESSION["intentos"] += 1;
    }
    include 'vistas/partida.php';

