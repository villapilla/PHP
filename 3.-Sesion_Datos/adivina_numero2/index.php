<?php
    include 'class/partida.php';
    session_start();
    if(isset($_POST["fin"])) {
        session_unset();
        //session_destroy();
    }
    if(!isset($_SESSION["partida"])) {
        $_SESSION["partida"] = new partida();
    } else {
        $_SESSION["partida"]->plusIntentos();
    }
    $partida = $_SESSION["partida"];
    include 'vistas/partida.php';