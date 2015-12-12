<?php
$jugadas = $_POST['jugadas'];
function hayGanador($jugadas, &$valor){
    $salida = false;
    for($i = 0; $i < 3; $i++) {
        if((isset($jugadas[($i*3)]) && isset($jugadas[($i*3)+1]) && isset($jugadas[(($i*3)+2)])) && !$salida) {
            $salida = ($jugadas[$i*3] === $jugadas[($i*3)+1] && $jugadas[$i*3] === $jugadas[($i*3+2)]);
            $valor = $jugadas[$i*3];
        }
        if((isset($jugadas[$i]) && isset($jugadas[$i+3]) && isset($jugadas[$i+6])) && !$salida) {
            $salida = ($jugadas[$i] === $jugadas[$i+3] && $jugadas[$i+6] === $jugadas[$i+3]);
            $valor = $jugadas[$i];
        }
    }
    if((isset($jugadas[0]) && isset($jugadas[4]) && isset($jugadas[8])) && !$salida) {
            $salida = ($jugadas[0] === $jugadas[4] && $jugadas[8] === $jugadas[$i+1]);
            $valor = $jugadas[0];
    }
    if((isset($jugadas[2]) && isset($jugadas[4]) && isset($jugadas[6])) && !$salida) {
            $salida = ($jugadas[2] === $jugadas[4] && $jugadas[6] === $jugadas[$i+1]);
            $valor = $jugadas[2];
    }
    return $salida;
}

if(hayGanador($jugadas, $valor)) {
    if($valor = 0) {
        include 'vistas/ganaJugador.php';
    } else {
        include 'vistas/ganaMaquina.php';
    }
    
} else {
    
}

