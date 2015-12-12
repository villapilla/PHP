<?php
    $equipos = ["Osasuna", "Valladolid", "Oviedo", "Celta", "Numancia", "Lugo", "Salamanca", "Pontevedra"];
    shuffle($equipos);
    $partidos = [];
    $partidos = array_chunk($equipos, 2);
                
    include "./vistas/bienvenida.php";
?>